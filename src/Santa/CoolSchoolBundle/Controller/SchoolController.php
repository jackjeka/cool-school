<?php

namespace Santa\CoolSchoolBundle\Controller;

use Santa\CoolSchoolBundle\Entity\School;
use Santa\CoolSchoolBundle\Entity\Specialization;
use Santa\CoolSchoolBundle\Repository\SchoolRepository;
use Santa\CoolSchoolBundle\Form\Type\SchoolType;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route as Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method as Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template as Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class SchoolController extends Controller
{
    /**
     * @Template()
     * @Route("/add")
     * @Method({"GET", "POST"})
     */
    public function addAction(Request $request)
    {
        $specializations = $this->getDoctrine()
            ->getManager()
            ->getRepository('SantaCoolSchoolBundle:Specialization')
            ->findAll();

        $school = new School();

        $form = $this->createForm(new SchoolType($specializations), $school);

        $form->handleRequest($request);
        if ($form->isValid()) {
            $this->getDoctrine()->getManager()->persist($school);
            $this->getDoctrine()->getManager()->flush();

            return $this->redirect($this->get('router')->generate('santa_coolschool_index_index'));
        }

        return ['form' => $form->createView()];
    }

    /**
     * @Template()
     * @Route("/{slug}")
     * @Method({"GET"})
     */
    public function showAction($slug)
    {
        return ['school' => $this->getDoctrine()->getManager()->getRepository('SantaCoolSchoolBundle:School')->findOneBySlug($slug)];
    }
}