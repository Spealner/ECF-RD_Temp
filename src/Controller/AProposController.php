<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AProposController extends AbstractController
{
    /**
     * @Route("/a-propos", name="a-propos")
     */
     public function allUsers(UserRepository $userRepository): Response
    {
        return $this->render('a_propos/apropos.html.twig', [
            'users' => $userRepository->findAll(),
        ]);
    }
}
