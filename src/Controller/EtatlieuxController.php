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

    // #[IsGranted('ROLE_GESTIONNAIRE')]
    // #[Route('/historiquechambre', name: 'app_etatlieux_indexhistorique', methods: ['GET'])]
    // public function indexhistorique(EtatlieuxRepository $etatlieuxRepository, Chambre $chambre): Response
    // {
    //     return $this->render('chambre/show.html.twig', [
    //         'etatlieuxes' => $etatlieuxRepository->findBy(array(), array('nom' => 'asc')),
    //     ]);
    // }
    
    #[IsGranted('ROLE_GESTIONNAIRE')]
    #[Route('/new/{id}', name: 'app_etatlieux_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, Chambre $chambre, EtatlieuxRepository $etatlieuxRepository): Response
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



        $edlPrecedent = $etatlieuxRepository->findBy(['chambre' => $chambre], ['id' => 'DESC'], 1, 0);
        $edlPrecedent = count($edlPrecedent)>0 ? $edlPrecedent[0] : null;

        if($edlPrecedent != null) {
            $etatlieux->setEntreePorteEntreeEtat($edlPrecedent->getEntreePorteSortieEtat());
            $etatlieux->setEntreeMurEntreeEtat($edlPrecedent->getEntreeMurSortieEtat());
            $etatlieux->setEntreeSolEntreeEtat($edlPrecedent->getEntreeSolSortieEtat());
            $etatlieux->setEntreePlafondEntreeEtat($edlPrecedent->getEntreePlafondSortieEtat());
            $etatlieux->setChambreSolEntreeEtat($edlPrecedent->getChambreSolSortieEtat());
            $etatlieux->setChambreMurEntreeEtat($edlPrecedent->getChambreMurSortieEtat());
            $etatlieux->setChambrePlafondEntreeEtat($edlPrecedent->getChambrePlafondSortieEtat());
            $etatlieux->setChambreFenetresEntreeEtat($edlPrecedent->getChambreFenetresSortieEtat());
            $etatlieux->setChambrePriseinterupteurEntreeEtat($edlPrecedent->getChambrePriseinterupteurSortieEtat());
            $etatlieux->setChambreArmoireEntreeEtat($edlPrecedent->getChambreArmoireSortieEtat());
            $etatlieux->setChambreBureauEntreeEtat($edlPrecedent->getChambreBureauSortieEtat());
            $etatlieux->setChambreTablechevetEntreeEtat($edlPrecedent->getChambreTablechevetSortieEtat());
            $etatlieux->setChambreChaiseEntreeEtat($edlPrecedent->getChambreChaisesSortieEtat());
            $etatlieux->setChambreLitossatureEntreeEtat($edlPrecedent->getChambreLitossatureSortieEtat());
            $etatlieux->setChambreMatelasEntreeEtat($edlPrecedent->getChambreMatelasSortieEtat());
            $etatlieux->setChambreOreillerEntreeEtat($edlPrecedent->getChambreOreillerSortieEtat());
            $etatlieux->setChambrePrisetelephoneEntreeEtat($edlPrecedent->getChambrePrisetelephoneSortieEtat());
            $etatlieux->setChambrePriseinformatiquetvEntreeEtat($edlPrecedent->getChambrePriseinformatiquetvSortieEtat());
            $etatlieux->setChambreLuminaireEntreeEtat($edlPrecedent->getChambreLuminaireSortieEtat());
            $etatlieux->setSdbSolEntreeEtat($edlPrecedent->getSdbSolSortieEtat());
            $etatlieux->setSdbMurEntreeEtat($edlPrecedent->getSdbMurSortieEtat());
            $etatlieux->setSdbPlafondEntreeEtat($edlPrecedent->getSdbPlafondSortieEtat());
            $etatlieux->setSdbPrisesinterrupteursEntreeEtat($edlPrecedent->getSdbPrisesinterrupteursSortieEtat());
            $etatlieux->setSdbVasquelavaboEntreeEtat($edlPrecedent->getSdbVasquelavaboSortieEtat());
            $etatlieux->setSdbMiroirEntreeEtat($edlPrecedent->getSdbMiroirSortieEtat());
            $etatlieux->setSdbToilettesEntreeEtat($edlPrecedent->getSdbToilettesSortieEtat());
            $etatlieux->setSdbAbattanttoilettesEntreeEtat($edlPrecedent->getSdbAbattanttoilettesSortieEtat());
            $etatlieux->setSdbPatereEntreeEtat($edlPrecedent->getSdbPatereSortieEtat());
            $etatlieux->setSdbDoucheEntreeEtat($edlPrecedent->getSdbDoucheSortieEtat());
            $etatlieux->setSdbPardoucheEntreeEtat($edlPrecedent->getSdbPardoucheSortieEtat());

            $etatlieux->setEntreePorteEntreeCommentaire($edlPrecedent->getEntreePorteSortieCommentaire());
            $etatlieux->setEntreeSolEntreeCommentaire($edlPrecedent->getEntreeSolSortieCommentaire());
            $etatlieux->setEntreeMurEntreeCommentaire($edlPrecedent->getEntreeMurSortieCommentaire());
            $etatlieux->setEntreePlafondEntreeCommentaire($edlPrecedent->getEntreePlafondSortieCommentaire());
            $etatlieux->setChambreSolEntreeCommentaire($edlPrecedent->getChambreSolSortieCommentaire());
            $etatlieux->setChambreMurEntreeCommentaire($edlPrecedent->getChambreMurSortieCommentaire());
            $etatlieux->setChambrePlafondEntreeCommentaire($edlPrecedent->getChambrePlafondSortieCommentaire());
            $etatlieux->setChambreFenetresEntreeCommentaire($edlPrecedent->getChambreFenetresSortieCommentaire());
            $etatlieux->setChambrePriseinterupteurEntreeCommentaire($edlPrecedent->getChambrePriseinterupteurSortieCommentaire());
            $etatlieux->setChambreArmoireEntreeCommentaire($edlPrecedent->getChambreArmoireSortieCommentaire());
            $etatlieux->setChambreBureauEntreeCommentaire($edlPrecedent->getChambreBureauSortieCommentaire());
            $etatlieux->setChambreTablechevetEntreeCommentaire($edlPrecedent->getChambreTablechevetSortieCommentaire());
            $etatlieux->setChambreChaisesEntreeCommentaire($edlPrecedent->getChambreChaisesSortieCommentaire());
            $etatlieux->setChambreLitossatureEntreeCommentaire($edlPrecedent->getChambreLitossatureSortieCommentaire());
            $etatlieux->setChambreMatelasEntreeCommentaire($edlPrecedent->getChambreMatelasSortieCommentaire());
            $etatlieux->setChambreOreillerEntreeCommentaire($edlPrecedent->getChambreOreillerSortieCommentaire());
            $etatlieux->setChambrePrisetelephoneEntreeCommentaire($edlPrecedent->getChambrePrisetelephoneSortieCommentaire());
            $etatlieux->setChambrePriseinformatiquetvEntreeCommentaire($edlPrecedent->getChambrePriseinformatiquetvSortieCommentaire());
            $etatlieux->setChambreLuminaireEntreeCommentaire($edlPrecedent->getChambreLuminaireSortieCommentaire());
            $etatlieux->setSdbSolEntreeCommentaire($edlPrecedent->getSdbSolSortieCommentaire());
            $etatlieux->setSdbMurEntreeCommentaire($edlPrecedent->getSdbMurSortieCommentaire());
            $etatlieux->setSdbPlafondEntreeCommentaire($edlPrecedent->getSdbPlafondSortieCommentaire());
            $etatlieux->setSdbPrisesinterrupteureEntreeCommentaire($edlPrecedent->getSdbPrisesinterrupteursSortieCommentaire());
            $etatlieux->setSdbVasquelavaboEntreeCommentaire($edlPrecedent->getSdbVasquelavaboSortieCommentaire());
            $etatlieux->setSdbMiroirEntreeCommentaire($edlPrecedent->getSdbMiroirSortieCommentaire());
            $etatlieux->setSdbToilettesEntreeCommentaire($edlPrecedent->getSdbToilettesSortieCommentaire());
            $etatlieux->setSdbAbattanttoilettesEntreeCommentaire($edlPrecedent->getSdbAbattanttoilettesSortieCommentaire());
            $etatlieux->setSdbPatereEntreeCommentaire($edlPrecedent->getSdbPatereSortieCommentaire());
            $etatlieux->setSdbDoucheEntreeCommentaire($edlPrecedent->getSdbDoucheSortieCommentaire());
            $etatlieux->setSdbPardoucheEntreeCommentaire($edlPrecedent->getSdbPardoucheSortieCommentaire());
     
           
           }

           

      




        $form = $this->createForm(EtatlieuxType::class, $etatlieux, array());

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($etatlieux);

            //preremplir letat sortie avec la partie entree
            $etatlieux->setEntreePorteSortieEtat($etatlieux->getEntreePorteEntreeEtat());
            $etatlieux->setEntreeSolSortieEtat($etatlieux->getEntreeSolEntreeEtat());
            $etatlieux->setEntreeMurSortieEtat($etatlieux->getEntreeMurEntreeEtat());
            $etatlieux->setEntreePlafondSortieEtat($etatlieux->getEntreePlafondEntreeEtat());
            $etatlieux->setChambreSolSortieEtat($etatlieux->getChambreSolEntreeEtat());
            $etatlieux->setChambreMurSortieEtat($etatlieux->getChambreMurEntreeEtat());
            $etatlieux->setChambrePlafondSortieEtat($etatlieux->getChambrePlafondEntreeEtat());
            $etatlieux->setChambreFenetresSortieEtat($etatlieux->getChambreFenetresEntreeEtat());
            $etatlieux->setChambrePriseinterupteurSortieEtat($etatlieux->getChambrePriseinterupteurEntreeEtat());
            $etatlieux->setChambreArmoireSortieEtat($etatlieux->getChambreArmoireEntreeEtat());
            $etatlieux->setChambreBureauSortieEtat($etatlieux->getChambreBureauEntreeEtat());
            $etatlieux->setChambreTablechevetSortieEtat($etatlieux->getChambreTablechevetEntreeEtat());
            $etatlieux->setChambreChaisesSortieEtat($etatlieux->getChambreChaiseEntreeEtat());
            $etatlieux->setChambreLitossatureSortieEtat($etatlieux->getChambreLitossatureEntreeEtat());
            $etatlieux->setChambreMatelasSortieEtat($etatlieux->getChambreMatelasEntreeEtat());
            $etatlieux->setChambreOreillerSortieEtat($etatlieux->getChambreOreillerEntreeEtat());
            $etatlieux->setChambrePrisetelephoneSortieEtat($etatlieux->getChambrePrisetelephoneEntreeEtat());
            $etatlieux->setChambrePriseinformatiquetvSortieEtat($etatlieux->getChambrePriseinformatiquetvEntreeEtat());
            $etatlieux->setChambreLuminaireSortieEtat($etatlieux->getChambreLuminaireEntreeEtat());
            $etatlieux->setSdbSolSortieEtat($etatlieux->getSdbSolEntreeEtat());
            $etatlieux->setSdbMurSortieEtat($etatlieux->getSdbMurEntreeEtat());
            $etatlieux->setSdbPlafondSortieEtat($etatlieux->getSdbPlafondEntreeEtat());
            $etatlieux->setSdbPrisesinterrupteursSortieEtat($etatlieux->getSdbPrisesinterrupteursEntreeEtat());
            $etatlieux->setSdbVasquelavaboSortieEtat($etatlieux->getSdbVasquelavaboEntreeEtat());
            $etatlieux->setSdbMiroirSortieEtat($etatlieux->getSdbMiroirEntreeEtat());
            $etatlieux->setSdbToilettesSortieEtat($etatlieux->getSdbToilettesEntreeEtat());
            $etatlieux->setSdbAbattanttoilettesSortieEtat($etatlieux->getSdbAbattanttoilettesEntreeEtat());
            $etatlieux->setSdbPatereSortieEtat($etatlieux->getSdbPatereEntreeEtat());
            $etatlieux->setSdbDoucheSortieEtat($etatlieux->getSdbDoucheEntreeEtat());
            $etatlieux->setSdbPardoucheSortieEtat($etatlieux->getSdbPardoucheEntreeEtat());
         
            $etatlieux->setEntreePorteSortieCommentaire($etatlieux->getEntreePorteEntreeCommentaire());
            $etatlieux->setEntreePorteSortieCommentaire($etatlieux->getEntreePorteEntreeCommentaire());
            $etatlieux->setEntreeSolSortieCommentaire($etatlieux->getEntreeSolEntreeCommentaire());
            $etatlieux->setEntreeMurSortieCommentaire($etatlieux->getEntreeMurEntreeCommentaire());
            $etatlieux->setEntreePlafondSortieCommentaire($etatlieux->getEntreePlafondEntreeCommentaire());
            $etatlieux->setChambreSolSortieCommentaire($etatlieux->getChambreSolEntreeCommentaire());
            $etatlieux->setChambreMurSortieCommentaire($etatlieux->getChambreMurEntreeCommentaire());
            $etatlieux->setChambrePlafondSortieCommentaire($etatlieux->getChambrePlafondEntreeCommentaire());
            $etatlieux->setChambreFenetresSortieCommentaire($etatlieux->getChambreFenetresEntreeCommentaire());
            $etatlieux->setChambrePriseinterupteurSortieCommentaire($etatlieux->getChambrePriseinterupteurEntreeCommentaire());
            $etatlieux->setChambreArmoireSortieCommentaire($etatlieux->getChambreArmoireEntreeCommentaire());
            $etatlieux->setChambreBureauSortieCommentaire($etatlieux->getChambreBureauEntreeCommentaire());
            $etatlieux->setChambreTablechevetSortieCommentaire($etatlieux->getChambreTablechevetEntreeCommentaire());
            $etatlieux->setChambreChaisesSortieCommentaire($etatlieux->getChambreChaisesEntreeCommentaire());
            $etatlieux->setChambreLitossatureSortieCommentaire($etatlieux->getChambreLitossatureEntreeCommentaire());
            $etatlieux->setChambreMatelasSortieCommentaire($etatlieux->getChambreMatelasEntreeCommentaire());
            $etatlieux->setChambreOreillerSortieCommentaire($etatlieux->getChambreOreillerEntreeCommentaire());
            $etatlieux->setChambrePrisetelephoneSortieCommentaire($etatlieux->getChambrePrisetelephoneEntreeCommentaire());
            $etatlieux->setChambrePriseinformatiquetvSortieCommentaire($etatlieux->getChambrePriseinformatiquetvEntreeCommentaire());
            $etatlieux->setChambreLuminaireSortieCommentaire($etatlieux->getChambreLuminaireEntreeCommentaire());
            $etatlieux->setSdbSolSortieCommentaire($etatlieux->getSdbSolEntreeCommentaire());
            $etatlieux->setSdbMurSortieCommentaire($etatlieux->getSdbMurEntreeCommentaire());
            $etatlieux->setSdbPlafondSortieCommentaire($etatlieux->getSdbPlafondEntreeCommentaire());
            $etatlieux->setSdbPrisesinterrupteursSortieCommentaire($etatlieux->getSdbPrisesinterrupteureEntreeCommentaire());
            $etatlieux->setSdbVasquelavaboSortieCommentaire($etatlieux->getSdbVasquelavaboEntreeCommentaire());
            $etatlieux->setSdbMiroirSortieCommentaire($etatlieux->getSdbMiroirEntreeCommentaire());
            $etatlieux->setSdbToilettesSortieCommentaire($etatlieux->getSdbToilettesEntreeCommentaire());
            $etatlieux->setSdbAbattanttoilettesSortieCommentaire($etatlieux->getSdbAbattanttoilettesEntreeCommentaire());
            $etatlieux->setSdbPatereSortieCommentaire($etatlieux->getSdbPatereEntreeCommentaire());
            $etatlieux->setSdbDoucheSortieCommentaire($etatlieux->getSdbDoucheEntreeCommentaire());
            $etatlieux->setSdbPardoucheSortieCommentaire($etatlieux->getSdbPardoucheEntreeCommentaire());
        

        

            $entityManager->flush();

            

            // return $this->redirectToRoute('app_etatlieux_index', [], Response::HTTP_SEE_OTHER);
            return $this->redirectToRoute('app_chambre_show', ['id' => $chambre->getId()], Response::HTTP_SEE_OTHER);

        

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
    #[Route('/imprimerentree/{id}', name: 'app_etatlieux_showimprimerentree', methods: ['GET'])]
    public function showimprimerentree(Etatlieux $etatlieux): Response
    {
        return $this->render('etatlieux/showimprimerentree.html.twig', [
            'etatlieux' => $etatlieux,
        ]);
    }

    #[IsGranted('ROLE_GESTIONNAIRE')]
    #[Route('/sortie/edit/{id}', name: 'app_etatlieux_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Etatlieux $etatlieux, EntityManagerInterface $entityManager): Response
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
            //todo preremplir date du jour etat sortie
            $etatlieux->setDateCreation(new \DateTimeImmutable('now'));

            $entityManager->flush();
            
            
            
      
            return $this->redirectToRoute('app_chambre_show', ['id' => $etatlieux->getChambre()->getId()], Response::HTTP_SEE_OTHER);
      
      
        }

        return $this->render('etatlieux/editsortie.html.twig', [
            'etatlieux' => $etatlieux,
            'form' => $form,
      

        ]);
    }

    #[IsGranted('ROLE_ADMIN')]
    #[Route('/delete/{id}', name: 'app_etatlieux_delete', methods: ['POST'])]
    public function delete(Request $request, Etatlieux $etatlieux, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$etatlieux->getId(), $request->getPayload()->get('_token'))) {
            $entityManager->remove($etatlieux);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_etatlieux_index', [], Response::HTTP_SEE_OTHER);
    }


    #[IsGranted('ROLE_GESTIONNAIRE')]
    #[Route('/caution/{id}', name: 'app_etatlieux_caution', methods: ['POST'])]
    public function caution(Request $request, Etatlieux $etatlieux, EntityManagerInterface $entityManager): Response
    {
            $caution = $etatlieux->isCaution();
            // if ($caution==0) { $etatlieux-> setCaution(null);}
            $etatlieux->setCaution(!$caution);
            $entityManager->flush();

        // on redirige sur la page en cours
        return $this->redirect($request->headers->get('referer'));
    }


}
