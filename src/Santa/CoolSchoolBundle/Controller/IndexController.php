<?php

namespace Santa\CoolSchoolBundle\Controller;
use Santa\CoolSchoolBundle\Entity\School;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;


class IndexController extends Controller
{
     /**
     * @Template()
     * @Route("/")
     * @Method({"GET"})
     */
    public function indexAction()
    {
        $schools = $this->getDoctrine()->getManager()->getRepository('SantaCoolSchoolBundle:School')->findAll();

        return ['schools' => $schools];

    }
}