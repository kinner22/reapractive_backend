<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CheckController extends AbstractController
{
    /**
     * @Route("/check", name="check")
     */
    public function index()
    {
        return $this->json([
            'status' => 'ok2'
        ]);
    }
}
