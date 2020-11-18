<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="voyage")
     */
    public function index(): Response
    {
        return $this->render('voyage/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
}
