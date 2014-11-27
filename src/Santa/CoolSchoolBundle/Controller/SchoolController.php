<?php

namespace Santa\CoolSchoolBundle\Controller;
use Santa\CoolSchoolBundle\Entity\School;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route as Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method as Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template as Template;
//use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
//use Symfony\Component\Routing\Annotation\Route;
//use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;


class SchoolController extends Controller
{
    /**
     * @Template()
     * @Route("/add")
     * @Method({"GET", "POST"})
     */
    public function addAction(Request $request)
    {
        if ($request->isMethod('POST')) {
            $school = new School();
            $school
                ->setName($request->request->get('name'))
                ;
            $this->getDoctrine()->getManager()->persist($school);
            $this->getDoctrine()->getManager()->flush();
            return $this->redirect($this->get('router')->generate('cool_school'));
        }
//        return ['students' => $this->getStudentRepository()->findAll()];

    }

    /**
     * @Template()
     * @Route("/{slug}")
     * @Method({"GET"})
     */
    public function showAction($slug)
    {
        return ['school' => $this->getSchoolRepository()->findOneBySlug($slug)];
    }
    /**
     * @return EntityManager
     */
    protected function getEm()
    {
        return $this->getDoctrine()->getManager();
    }

}