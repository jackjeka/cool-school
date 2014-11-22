<?php

namespace Santa\CoolSchoolBundle\Controller;
use Santa\CoolSchoolBundle\Entity\School;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;


class SchoolController extends Controller
{
     /**
     * @Template()
     * @Route("/")
     * @Method({"GET"})
     */
    public function newAction(Request $request)
    {
    $schools = $this->getDoctrine()->getEntityManager()->getRepository('CoolSchoolBundle:School')->findAll();

        return $schools;
    }
}