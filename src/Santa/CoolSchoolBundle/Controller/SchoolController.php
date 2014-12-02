<?php

namespace Santa\CoolSchoolBundle\Controller;
use Santa\CoolSchoolBundle\Entity\School;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route as Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method as Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template as Template;


class SchoolController extends Controller
{
    /**
     * @Template()
     * @Route("/add")
     * @Method({"GET", "POST"})
     */
    public function addAction()
    {
//        if ($request->isMethod('POST')) {
//            $school = new School();
//            $school
//                ->setName($request->Request->get('name'))
//                ;
//            $this->getDoctrine()->getManager()->persist($school);
//            $this->getDoctrine()->getManager()->flush();
        return $this->generate('coolschool_school_add');
    }


    /**
     * @Template()
     * @Route("/{slug}")
     * @Method({"GET"})
     */
    public function showAction($slug)
    {
        return ['school' => $this->getDoctrine()->getRepository(School::class)->findOneBySlug($slug)];

//        return $this->redirect($this->get('router')->generate('coolschool_school_show'));
    }

}