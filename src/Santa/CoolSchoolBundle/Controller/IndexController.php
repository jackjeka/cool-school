<?php

namespace Santa\CoolSchoolBundle\Controller;
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
    public function indexAction($name = 'santa')
    {
    return $this->render('SantaCoolSchoolBundle:Index:index.html.twig', array('name' => $name));
    }
}