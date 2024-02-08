<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProjectIdeaController extends AbstractController
{
    #[Route('/project-idea', name: 'app_project_idea')]
    public function index(): Response
    {
        return $this->render('project_idea/index.html.twig', [
            'controller_name' => 'ProjectIdeaController',
        ]);
    }
}
