<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="default")
     * @Route("/", name="homepage")
     */
    public function defaultAction(Request $request)
    {
        return $this->render('default/index.html.twig', [
        ]);
    }

    /**
     * @Route("/failure", name="failure")
     */
    public function failureAction(Request $request)
    {
        return $this->render('default/failure.html.twig', [
        ]);
    }
}
