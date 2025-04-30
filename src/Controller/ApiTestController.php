<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ApiTestController extends AbstractController
{
    #[Route('/api/test', name: 'api_test', methods: ['GET'])]
    public function index(): Response
    {
        return $this->json(['message' => 'Funciona OK']);
    }
}