<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefinitionController extends AbstractController
{
    /**
     * @Route("/definition", name="definition")
     */
    public function index(): Response
    {
        return $this->render('definition/index.html.twig', [
            'controller_name' => 'DefinitionController',
        ]);
    }
}
