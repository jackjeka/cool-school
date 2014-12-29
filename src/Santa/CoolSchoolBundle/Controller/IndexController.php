<?php

namespace Santa\CoolSchoolBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;


class IndexController extends Controller
{
     /**
     * @Template()
     * @Route("/")
     * @Method({"GET"})
     */
    public function indexAction(Request $request)
    {
        $locale = $request->getLocale();

        $schools = $this->getDoctrine()->getManager()->getRepository('SantaCoolSchoolBundle:School')->findAll();

        return ['schools' => $schools];

    }
}