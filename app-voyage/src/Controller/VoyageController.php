<?php

namespace App\Controller;

use App\Entity\PropertySearch;
use App\Entity\Voyage;
use App\Repository\VoyageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VoyageController extends AbstractController
{
    /**
     * @Route("/voyage/{id}", name="show")
     */
    public function showOneVoyage(Voyage $voyage): Response
    {
        return $this->render('voyage/index.html.twig', [
            'voyage' => $voyage
        ]);
    }
}
