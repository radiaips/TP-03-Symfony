<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TheseController extends AbstractController
{
    /**
     * @Route("/these", name="these")
     */
    public function index()
    {
        return $this->render('these/index.html.twig', [
            'controller_name' => 'TheseController',
            'titre'=> 'TheseController',
            'phase_daccroche' => 'TheseController',
            'mail' => 'TheseController',
            'description' => 'TheseController',
        ]);
    }
}
