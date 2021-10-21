<?php

namespace App\Controller;

use App\Entity\ChambreFroide;
use App\Form\AddSondesType;
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

    /**
     * @IsGranted("ROLE_OFFICINE")
    * @Route("/sondes/add", name="add_sondes")
    */
    public function addSondes(Request $request): Response
    {
        $chambreFroides = new ChambreFroide();

        $form = $this->createForm(AddSondesType::class, $chambreFroides);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $chambreFroides = $form->getData();

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($chambreFroides);
            $entityManager->flush();

            return $this->redirectToRoute('add_sondes');
        }

        return $this->render('sondes/addsondes.html.twig', [
            'addSondesForm' => $form->createView()
        ]);
    }

        /**
         * Recuperation du details d'une sonde
         * Fetch via primary key because {id} is in the route.
         * @Route("sondes/details/{id}", name="details_sondes")
         */
        public function details(ChambreFroide $chambreFroide): Response
    {
        return $this->render('sondes/details.html.twig', [
            'chambreFroide' => $chambreFroide,
        ]);
    }
}
