<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DefaultController extends AbstractController
{
    #[Route(path: "/index", name: "app_index")]
    public function index(): Response
    {
        return $this->render("program/index.html.twig", ['greetings' => 'Bienvenue !']);
    }
}
