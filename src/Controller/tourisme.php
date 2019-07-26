<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class tourisme extends AbstractController

{

    /**
     * @Route("/")
     */

    public function redirection()
    {


        return $this->redirectToRoute('tourisme');
    }

    /**
     * @Route("/tourisme" , name="tourisme")
     */

    public function principal()
    {

        return $this->render('tourisme/tourisme.html.twig',);
    }


    /**
     * @Route("tourisme/plage" , name="plage" )
     */

    public function plage()
    {

        return $this->render('tourisme/plage.html.twig',);
    }
}
