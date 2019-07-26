<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class tourisme extends AbstractController
{

    /**
     * @Route("/tourisme")
     */

    public function principal()
    {

        return $this->render('tourisme/tourisme.html.twig',);


     }
}
