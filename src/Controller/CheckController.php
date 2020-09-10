<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CheckController extends AbstractController
{
    public function index()
    {
        return $this->json([
            'status' => 'ok2'
        ]);
    }
}
