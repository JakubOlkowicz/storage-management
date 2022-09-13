<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductTypeController extends AbstractController
{
    #[Route('/typy-produktow', name: 'app_product_type')]
    public function index(): Response
    {
        return $this->render('product_type/index.html.twig', [
            'controller_name' => 'ProductTypeController',
        ]);
    }
}
