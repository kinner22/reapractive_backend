<?php

namespace App\Controller;

use App\Entity\UserData;
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


    public function createUserData(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $data['currentTime']  = date("Y m d H:i:s");

        try {
            $em = $this->getDoctrine()->getManager();
            $userData = new UserData();
            $userData->setName($data['name']);
            $userData->setUsername($data['username']);
            $userData->setSurname($data['surname']);

            $em->persist($userData);

            $em->flush();
        } catch (\Exception $e) {
            return new JsonResponse([
                'status' => '400',
                'data' => [
                    'message' => $e->getMessage()
                ]
            ], 400);
        }

        return new JsonResponse([
            'status' => 'OK',
            'data' => [
                'id' => $userData->getId()
            ]
        ]);
    }

    public function update()
    {
    }

    public function delete()
    {
    }
}
