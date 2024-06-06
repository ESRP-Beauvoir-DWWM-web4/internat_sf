<?php

namespace App\Controller;

use App\Entity\Chambre;
use App\Entity\Etatlieux;
use App\Form\EtatlieuxType;
use App\Form\EtatlieuxSortieType;
use App\Repository\EtatlieuxRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


#[Route('/etatlieux')]
class EtatlieuxController extends AbstractController
{
 
   
    #[IsGranted('ROLE_GESTIONNAIRE')]
    #[Route('/', name: 'app_etatlieux_index', methods: ['GET'])]
    public function index(EtatlieuxRepository $etatlieuxRepository): Response
    {
        return $this->render('etatlieux/index.html.twig', [
            'etatlieuxes' => $etatlieuxRepository->findBy(array(), array('nom' => 'asc')),
        ]);
    }
    
    #[IsGranted('ROLE_GESTIONNAIRE')]
    #[Route('/{id}/new', name: 'app_etatlieux_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, Chambre $chambre): Response
    {
        $edlList = $chambre->getEtatsLieux();
        foreach ($edlList as $edl) {
            if($edl->isStatut()==0){
                return $this->redirectToRoute('app_chambre_show', ['id' => $chambre->getId()], Response::HTTP_SEE_OTHER);  }
        }
        $etatlieux = new Etatlieux();

        $etatlieux->setDateCreation(new \DateTimeImmutable('now'));
        $etatlieux->setDateEntree(new \DateTimeImmutable('now'));
        $etatlieux->setCaution(false);
        $etatlieux->setNom($chambre->getNom());
        $etatlieux->setPrenom($chambre->getPrenom());
        $etatlieux->setSection($chambre->getSection());
        $etatlieux->setChambre($chambre);
        $etatlieux->setStatut(false);

        $form = $this->createForm(EtatlieuxType::class, $etatlieux, array());

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($etatlieux);
            $entityManager->flush();

            return $this->redirectToRoute('app_etatlieux_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('etatlieux/new.html.twig', [
            'etatlieux' => $etatlieux,
            'form' => $form,
            'chambre' => $chambre
        ]);
    }
    #[IsGranted('ROLE_GESTIONNAIRE')]
    #[Route('/show/{id}', name: 'app_etatlieux_show', methods: ['GET'])]
    public function show(Etatlieux $etatlieux): Response
    {
        return $this->render('etatlieux/show.html.twig', [
            'etatlieux' => $etatlieux,
        ]);
    }

    #[IsGranted('ROLE_GESTIONNAIRE')]
    #[Route('/imprimer/{id}', name: 'app_etatlieux_showimprimer', methods: ['GET'])]
    public function showimprimer(Etatlieux $etatlieux): Response
    {
        return $this->render('etatlieux/showimprimer.html.twig', [
            'etatlieux' => $etatlieux,
        ]);
    }

    #[IsGranted('ROLE_GESTIONNAIRE')]
    #[Route('/{id}/sortie/edit', name: 'app_etatlieux_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Etatlieux $etatlieux, EntityManagerInterface $entityManager, chambre $chambre): Response
    {
        if ($etatlieux->isStatut()) {
            return $this->redirectToRoute('app_chambre_show', ['id' => $etatlieux->getChambre()->getId()], Response::HTTP_SEE_OTHER);   
        }
        $form = $this->createForm(EtatlieuxSortieType::class, $etatlieux);
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            

            
            $etatlieux->setStatut(true);
            //todo : remettre à 0 les infos sur l'occupant de la chambre
            
            $etatlieux->getChambre()->setNom(null);
            $etatlieux->getChambre()->setPrenom(null);
            $etatlieux->getChambre()->setSection(null);
            $etatlieux->getChambre()->setDateEntree(null);
            $etatlieux->getChambre()->setHandicap(null);
            $etatlieux->getChambre()->setStatut(false);
            

            $entityManager->flush();
            
            
            
            return $this->redirectToRoute('app_etatlieux_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('etatlieux/editsortie.html.twig', [
            'etatlieux' => $etatlieux,
            'form' => $form,
      

        ]);
    }

    #[IsGranted('ROLE_ADMIN')]
    #[Route('/{id}', name: 'app_etatlieux_delete', methods: ['POST'])]
    public function delete(Request $request, Etatlieux $etatlieux, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$etatlieux->getId(), $request->getPayload()->get('_token'))) {
            $entityManager->remove($etatlieux);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_etatlieux_index', [], Response::HTTP_SEE_OTHER);
    }
}
