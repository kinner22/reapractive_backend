<?php

namespace App\Controller;

use App\Repository\UserDataRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class UserDataController extends AbstractController
{

    private UserDataRepository $userDataRepository;

    public function __construct(UserDataRepository $userDataRepository)
    {
        $this->userDataRepository = $userDataRepository;
    }

    public function index()
    {
    }


    public function create(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $data['currentTime']  = date("Y m d H:i:s");
        return new JsonResponse($data);
    }

    public function update()
    {
    }

    public function delete()
    {
    }
}
