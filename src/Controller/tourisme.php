<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Plage;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;






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

        $entityManager = $this->getDoctrine()->getManager();

       
        $repository = $this->getDoctrine()->getRepository(Plage::class);

        $plage = $repository->findAll();

        $plage;


        return $this->render('tourisme/plage.html.twig', [
            'plage' => $plage,
        ]);
    }
}
