<?php

namespace App\Controller;

use App\Entity\Chambre;
use App\Form\ChambreType;
use App\Form\ChambreOccupantType;
use App\Repository\ChambreRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\Loader\Configurator\form;

#[Route('/chambre')]
class ChambreController extends AbstractController
{
    #[Route('/', name: 'app_chambre_index', methods: ['GET'])]
    public function index(ChambreRepository $chambreRepository): Response
    {
        return $this->render('chambre/index.html.twig', [
            'chambres' => $chambreRepository->findBy([], ['numero' => 'ASC']),
        ]);
    }

    #[Route('/new', name: 'app_chambre_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $chambre = new Chambre();
        $form = $this->createForm(ChambreType::class, $chambre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($chambre);
            $entityManager->flush();

            return $this->redirectToRoute('app_chambre_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('chambre/new.html.twig', [
            'chambre' => $chambre,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_chambre_show', methods: ['GET'])]
    public function show(Chambre $chambre): Response
    {
        return $this->render('chambre/show.html.twig', [
            'chambre' => $chambre,
        ]);
    }

    #[Route('/{id}/editchambre', name: 'app_chambre_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Chambre $chambre, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ChambreType::class, $chambre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_chambre_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('chambre/editchambre.html.twig', [
            'chambre' => $chambre,
            'form' => $form,
        ]);
    }

    
    #[Route('/{id}/editoccupant', name: 'app_chambre_occupant_edit', methods: ['GET', 'POST'])]
    public function editoccupant(Request $request, Chambre $chambre, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ChambreOccupantType::class, $chambre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_chambre_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('chambre/editoccupant.html.twig', [
            'chambre' => $chambre,
            'form' => $form,
        ]);
    }


    #[Route('/{id}', name: 'app_chambre_delete', methods: ['POST'])]
    public function delete(Request $request, Chambre $chambre, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$chambre->getId(), $request->getPayload()->get('_token'))) {
            $entityManager->remove($chambre);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_chambre_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/changeStatut/{id}', name: 'app_chambre_change_status', methods: ['POST'])]
    public function changeStatus(Request $request, Chambre $chambre, EntityManagerInterface $entityManager): Response
    {
            $statut = $chambre->isStatut();
            if ($statut==0) { $chambre-> setSoutirageEau(null);}
            $chambre->setStatut(!$statut);
            $entityManager->flush();

        // on redirige sur la page en cours
        return $this->redirect($request->headers->get('referer'));
    }
    #[Route('/changeSoutirage/{id}', name: 'app_chambre_change_soutirage_eau', methods: ['POST'])]
    public function changeSoutirage(Request $request, Chambre $chambre, EntityManagerInterface $entityManager): Response
    {
            $dateSoutirage = new \DateTimeImmutable();
            $chambre->setSoutirageEau($dateSoutirage);
            $entityManager->flush();



            

        // on redirige sur la page en cours
        return $this->redirect($request->headers->get('referer'));
    }
}
