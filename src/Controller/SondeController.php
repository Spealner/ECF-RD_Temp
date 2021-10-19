<?php

namespace App\Controller;

use App\Repository\ChambreFroideRepository;
use Knp\Component\Pager\PaginatorInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SondeController extends AbstractController
{
    /**
     * @Route("/sondes", name="sondes")
     */
    public function sondes(
        ChambreFroideRepository $chambreFroideRepository,
        PaginatorInterface $paginator,
        Request $request

    ): Response {
        $data = $chambreFroideRepository->findAll();

        $chambreFroides = $paginator->paginate(
            $data, /*query NOT result */
            $request->query->getInt('page', 1), /*page number*/
            6 /*limit per page*/
        );

        return $this->render('sondes/sondes.html.twig', [
            'chambreFroides' => $chambreFroides,
        ]);
    }
}
