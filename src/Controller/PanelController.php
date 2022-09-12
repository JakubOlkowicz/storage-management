<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PanelController extends AbstractController
{
    public function index(): Response
    {
       
        return $this->render('/panel/panel.index.html.twig', [
            
        ]);
    }
}