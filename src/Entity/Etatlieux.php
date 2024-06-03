<?php

namespace App\Entity;

use App\Repository\EtatlieuxRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EtatlieuxRepository::class)]
class Etatlieux
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $dateCreation = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $prenom = null;

    #[ORM\Column(length: 255)]
    private ?string $section = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $dateEntree = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $dateSortie = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $heuresMenage = null;

    #[ORM\Column(nullable: true)]
    private ?float $montantMenageGlobal = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $adresseSortie = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $observation = null;

    #[ORM\Column(length: 255)]
    private ?string $entreePorteEntreeEtat = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $entreePorteEntreeCommentaire = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $entreePorteSortieEtat = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $entreePorteSortieCommentaire = null;

    #[ORM\Column(length: 255)]
    private ?string $entreeSolEntreeEtat = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $entreeSolEntreeCommentaire = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $entreeSolSortieEtat = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $entreeSolSortieCommentaire = null;

    #[ORM\Column(length: 255)]
    private ?string $entreeMurEntreeEtat = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $entreeMurEntreeCommentaire = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $entreeMurSortieEtat = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $entreeMurSortieCommentaire = null;

    #[ORM\Column(length: 255)]
    private ?string $entreePlafondEntreeEtat = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $entreePlafondEntreeCommentaire = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $entreePlafondSortieEtat = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $entreePlafondSortieCommentaire = null;

    #[ORM\Column(length: 255)]
    private ?string $chambreSolEntreeEtat = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $chambreSolEntreeCommentaire = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $chambreSolSortieEtat = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $chambreSolSortieCommentaire = null;

    #[ORM\Column(length: 255)]
    private ?string $chambreMurEntreeEtat = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $chambreMurEntreeCommentaire = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $chambreMurSortieEtat = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $chambreMurSortieCommentaire = null;

    #[ORM\Column(length: 255)]
    private ?string $chambrePlafondEntreeEtat = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $chambrePlafondEntreeCommentaire = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $chambrePlafondSortieEtat = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $chambrePlafondSortieCommentaire = null;

    #[ORM\Column(length: 255)]
    private ?string $chambreFenetresEntreeEtat = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $chambreFenetresEntreeCommentaire = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $chambreFenetresSortieEtat = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $chambreFenetresSortieCommentaire = null;

    #[ORM\Column(length: 255)]
    private ?string $chambrePriseinterupteurEntreeEtat = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $chambrePriseinterupteurEntreeCommentaire = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $chambrePriseinterupteurSortieEtat = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $chambrePriseinterupteurSortieCommentaire = null;

    #[ORM\Column(length: 255)]
    private ?string $chambreArmoireEntreeEtat = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $chambreArmoireEntreeCommentaire = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $chambreArmoireSortieEtat = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $chambreArmoireSortieCommentaire = null;

    #[ORM\Column(length: 255)]
    private ?string $chambreBureauEntreeEtat = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $chambreBureauEntreeCommentaire = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $chambreBureauSortieEtat = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $chambreBureauSortieCommentaire = null;

    #[ORM\Column(length: 255)]
    private ?string $chambreTablechevetEntreeEtat = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $chambreTablechevetEntreeCommentaire = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $chambreTablechevetSortieEtat = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $chambreTablechevetSortieCommentaire = null;

    #[ORM\Column(length: 255)]
    private ?string $chambreChaiseEntreeEtat = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $chambreChaisesEntreeCommentaire = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $chambreChaisesSortieEtat = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $chambreChaisesSortieCommentaire = null;

    #[ORM\Column(length: 255)]
    private ?string $chambreLitossatureEntreeEtat = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $chambreLitossatureEntreeCommentaire = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $chambreLitossatureSortieEtat = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $chambreLitossatureSortieCommentaire = null;

    #[ORM\Column(length: 255)]
    private ?string $chambreMatelasEntreeEtat = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $chambreMatelasEntreeCommentaire = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $chambreMatelasSortieEtat = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $chambreMatelasSortieCommentaire = null;

    #[ORM\Column(length: 255)]
    private ?string $chambreOreillerEntreeEtat = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $chambreOreillerEntreeCommentaire = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $chambreOreillerSortieEtat = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $chambreOreillerSortieCommentaire = null;

    #[ORM\Column(length: 255)]
    private ?string $chambrePrisetelephoneEntreeEtat = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $chambrePrisetelephoneEntreeCommentaire = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $chambrePrisetelephoneSortieEtat = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $chambrePrisetelephoneSortieCommentaire = null;

    #[ORM\Column(length: 255)]
    private ?string $chambrePriseinformatiquetvEntreeEtat = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $chambrePriseinformatiquetvEntreeCommentaire = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $chambrePriseinformatiquetvSortieEtat = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $chambrePriseinformatiquetvSortieCommentaire = null;

    #[ORM\Column(length: 255)]
    private ?string $chambreLuminaireEntreeEtat = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $chambreLuminaireEntreeCommentaire = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $chambreLuminaireSortieEtat = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $chambreLuminaireSortieCommentaire = null;

    #[ORM\Column(length: 255)]
    private ?string $sdbSolEntreeEtat = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $sdbSolEntreeCommentaire = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $sdbSolSortieEtat = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $sdbSolSortieCommentaire = null;

    #[ORM\Column(length: 255)]
    private ?string $sdbMurEntreeEtat = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $sdbMurEntreeCommentaire = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $sdbMurSortieEtat = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $sdbMurSortieCommentaire = null;

    #[ORM\Column(length: 255)]
    private ?string $sdbPlafondEntreeEtat = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $sdbPlafondEntreeCommentaire = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $sdbPlafondSortieEtat = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $sdbPlafondSortieCommentaire = null;

    #[ORM\Column(length: 255)]
    private ?string $sdbPrisesinterrupteursEntreeEtat = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $sdbPrisesinterrupteureEntreeCommentaire = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $sdbPrisesinterrupteursSortieEtat = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $sdbPrisesinterrupteursSortieCommentaire = null;

    #[ORM\Column(length: 255)]
    private ?string $sdbVasquelavaboEntreeEtat = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $sdbVasquelavaboEntreeCommentaire = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $sdbVasquelavaboSortieEtat = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $sdbVasquelavaboSortieCommentaire = null;

    #[ORM\Column(length: 255)]
    private ?string $sdbMiroirEntreeEtat = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $sdbMiroirEntreeCommentaire = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $sdbMiroirSortieEtat = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $sdbMiroirSortieCommentaire = null;

    #[ORM\Column(length: 255)]
    private ?string $sdbToilettesEntreeEtat = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $sdbToilettesEntreeCommentaire = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $sdbToilettesSortieEtat = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $sdbToilettesSortieCommentaire = null;

    #[ORM\Column(length: 255)]
    private ?string $sdbAbattanttoilettesEntreeEtat = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $sdbAbattanttoilettesEntreeCommentaire = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $sdbAbattanttoilettesSortieEtat = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $sdbAbattanttoilettesSortieCommentaire = null;

    #[ORM\Column(length: 255)]
    private ?string $sdbPatereEntreeEtat = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $sdbPatereEntreeCommentaire = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $sdbPatereSortieEtat = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $sdbPatereSortieCommentaire = null;

    #[ORM\Column(length: 255)]
    private ?string $sdbDoucheEntreeEtat = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $sdbDoucheEntreeCommentaire = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $sdbDoucheSortieEtat = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $sdbDoucheSortieCommentaire = null;

    #[ORM\Column(length: 255)]
    private ?string $sdbPardoucheEntreeEtat = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $sdbPardoucheEntreeCommentaire = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $sdbPardoucheSortieEtat = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $sdbPardoucheSortieCommentaire = null;

    #[ORM\ManyToOne(inversedBy: 'etatslieux')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Chambre $chambre = null;

    #[ORM\Column(nullable: true)]
    private ?bool $statut = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateCreation(): ?\DateTimeImmutable
    {
        return $this->dateCreation;
    }

    public function setDateCreation(\DateTimeImmutable $dateCreation): static
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getSection(): ?string
    {
        return $this->section;
    }

    public function setSection(string $section): static
    {
        $this->section = $section;

        return $this;
    }

    public function getDateEntree(): ?\DateTimeImmutable
    {
        return $this->dateEntree;
    }

    public function setDateEntree(\DateTimeImmutable $dateEntree): static
    {
        $this->dateEntree = $dateEntree;

        return $this;
    }

    public function getDateSortie(): ?\DateTimeImmutable
    {
        return $this->dateSortie;
    }

    public function setDateSortie(?\DateTimeImmutable $dateSortie): static
    {
        $this->dateSortie = $dateSortie;

        return $this;
    }

    public function getHeuresMenage(): ?string
    {
        return $this->heuresMenage;
    }

    public function setHeuresMenage(?string $heuresMenage): static
    {
        $this->heuresMenage = $heuresMenage;

        return $this;
    }

    public function getMontantMenageGlobal(): ?float
    {
        return $this->montantMenageGlobal;
    }

    public function setMontantMenageGlobal(?float $montantMenageGlobal): static
    {
        $this->montantMenageGlobal = $montantMenageGlobal;

        return $this;
    }

    public function getAdresseSortie(): ?string
    {
        return $this->adresseSortie;
    }

    public function setAdresseSortie(?string $adresseSortie): static
    {
        $this->adresseSortie = $adresseSortie;

        return $this;
    }

    public function getObservation(): ?string
    {
        return $this->observation;
    }

    public function setObservation(?string $observation): static
    {
        $this->observation = $observation;

        return $this;
    }

    public function getEntreePorteEntreeEtat(): ?string
    {
        return $this->entreePorteEntreeEtat;
    }

    public function setEntreePorteEntreeEtat(string $entreePorteEntreeEtat): static
    {
        $this->entreePorteEntreeEtat = $entreePorteEntreeEtat;

        return $this;
    }

    public function getEntreePorteEntreeCommentaire(): ?string
    {
        return $this->entreePorteEntreeCommentaire;
    }

    public function setEntreePorteEntreeCommentaire(?string $entreePorteEntreeCommentaire): static
    {
        $this->entreePorteEntreeCommentaire = $entreePorteEntreeCommentaire;

        return $this;
    }

    public function getEntreePorteSortieEtat(): ?string
    {
        return $this->entreePorteSortieEtat;
    }

    public function setEntreePorteSortieEtat(string $entreePorteSortieEtat): static
    {
        $this->entreePorteSortieEtat = $entreePorteSortieEtat;

        return $this;
    }

    public function getEntreePorteSortieCommentaire(): ?string
    {
        return $this->entreePorteSortieCommentaire;
    }

    public function setEntreePorteSortieCommentaire(?string $entreePorteSortieCommentaire): static
    {
        $this->entreePorteSortieCommentaire = $entreePorteSortieCommentaire;

        return $this;
    }

    public function getEntreeSolEntreeEtat(): ?string
    {
        return $this->entreeSolEntreeEtat;
    }

    public function setEntreeSolEntreeEtat(string $entreeSolEntreeEtat): static
    {
        $this->entreeSolEntreeEtat = $entreeSolEntreeEtat;

        return $this;
    }

    public function getEntreeSolEntreeCommentaire(): ?string
    {
        return $this->entreeSolEntreeCommentaire;
    }

    public function setEntreeSolEntreeCommentaire(?string $entreeSolEntreeCommentaire): static
    {
        $this->entreeSolEntreeCommentaire = $entreeSolEntreeCommentaire;

        return $this;
    }

    public function getEntreeSolSortieEtat(): ?string
    {
        return $this->entreeSolSortieEtat;
    }

    public function setEntreeSolSortieEtat(?string $entreeSolSortieEtat): static
    {
        $this->entreeSolSortieEtat = $entreeSolSortieEtat;

        return $this;
    }

    public function getEntreeSolSortieCommentaire(): ?string
    {
        return $this->entreeSolSortieCommentaire;
    }

    public function setEntreeSolSortieCommentaire(?string $entreeSolSortieCommentaire): static
    {
        $this->entreeSolSortieCommentaire = $entreeSolSortieCommentaire;

        return $this;
    }

    public function getEntreeMurEntreeEtat(): ?string
    {
        return $this->entreeMurEntreeEtat;
    }

    public function setEntreeMurEntreeEtat(string $entreeMurEntreeEtat): static
    {
        $this->entreeMurEntreeEtat = $entreeMurEntreeEtat;

        return $this;
    }

    public function getEntreeMurEntreeCommentaire(): ?string
    {
        return $this->entreeMurEntreeCommentaire;
    }

    public function setEntreeMurEntreeCommentaire(?string $entreeMurEntreeCommentaire): static
    {
        $this->entreeMurEntreeCommentaire = $entreeMurEntreeCommentaire;

        return $this;
    }

    public function getEntreeMurSortieEtat(): ?string
    {
        return $this->entreeMurSortieEtat;
    }

    public function setEntreeMurSortieEtat(?string $entreeMurSortieEtat): static
    {
        $this->entreeMurSortieEtat = $entreeMurSortieEtat;

        return $this;
    }

    public function getEntreeMurSortieCommentaire(): ?string
    {
        return $this->entreeMurSortieCommentaire;
    }

    public function setEntreeMurSortieCommentaire(?string $entreeMurSortieCommentaire): static
    {
        $this->entreeMurSortieCommentaire = $entreeMurSortieCommentaire;

        return $this;
    }

    public function getEntreePlafondEntreeEtat(): ?string
    {
        return $this->entreePlafondEntreeEtat;
    }

    public function setEntreePlafondEntreeEtat(string $entreePlafondEntreeEtat): static
    {
        $this->entreePlafondEntreeEtat = $entreePlafondEntreeEtat;

        return $this;
    }

    public function getEntreePlafondEntreeCommentaire(): ?string
    {
        return $this->entreePlafondEntreeCommentaire;
    }

    public function setEntreePlafondEntreeCommentaire(?string $entreePlafondEntreeCommentaire): static
    {
        $this->entreePlafondEntreeCommentaire = $entreePlafondEntreeCommentaire;

        return $this;
    }

    public function getEntreePlafondSortieEtat(): ?string
    {
        return $this->entreePlafondSortieEtat;
    }

    public function setEntreePlafondSortieEtat(?string $entreePlafondSortieEtat): static
    {
        $this->entreePlafondSortieEtat = $entreePlafondSortieEtat;

        return $this;
    }

    public function getEntreePlafondSortieCommentaire(): ?string
    {
        return $this->entreePlafondSortieCommentaire;
    }

    public function setEntreePlafondSortieCommentaire(?string $entreePlafondSortieCommentaire): static
    {
        $this->entreePlafondSortieCommentaire = $entreePlafondSortieCommentaire;

        return $this;
    }

    public function getChambreSolEntreeEtat(): ?string
    {
        return $this->chambreSolEntreeEtat;
    }

    public function setChambreSolEntreeEtat(string $chambreSolEntreeEtat): static
    {
        $this->chambreSolEntreeEtat = $chambreSolEntreeEtat;

        return $this;
    }

    public function getChambreSolEntreeCommentaire(): ?string
    {
        return $this->chambreSolEntreeCommentaire;
    }

    public function setChambreSolEntreeCommentaire(?string $chambreSolEntreeCommentaire): static
    {
        $this->chambreSolEntreeCommentaire = $chambreSolEntreeCommentaire;

        return $this;
    }

    public function getChambreSolSortieEtat(): ?string
    {
        return $this->chambreSolSortieEtat;
    }

    public function setChambreSolSortieEtat(?string $chambreSolSortieEtat): static
    {
        $this->chambreSolSortieEtat = $chambreSolSortieEtat;

        return $this;
    }

    public function getChambreSolSortieCommentaire(): ?string
    {
        return $this->chambreSolSortieCommentaire;
    }

    public function setChambreSolSortieCommentaire(?string $chambreSolSortieCommentaire): static
    {
        $this->chambreSolSortieCommentaire = $chambreSolSortieCommentaire;

        return $this;
    }

    public function getChambreMurEntreeEtat(): ?string
    {
        return $this->chambreMurEntreeEtat;
    }

    public function setChambreMurEntreeEtat(string $chambreMurEntreeEtat): static
    {
        $this->chambreMurEntreeEtat = $chambreMurEntreeEtat;

        return $this;
    }

    public function getChambreMurEntreeCommentaire(): ?string
    {
        return $this->chambreMurEntreeCommentaire;
    }

    public function setChambreMurEntreeCommentaire(?string $chambreMurEntreeCommentaire): static
    {
        $this->chambreMurEntreeCommentaire = $chambreMurEntreeCommentaire;

        return $this;
    }

    public function getChambreMurSortieEtat(): ?string
    {
        return $this->chambreMurSortieEtat;
    }

    public function setChambreMurSortieEtat(?string $chambreMurSortieEtat): static
    {
        $this->chambreMurSortieEtat = $chambreMurSortieEtat;

        return $this;
    }

    public function getChambreMurSortieCommentaire(): ?string
    {
        return $this->chambreMurSortieCommentaire;
    }

    public function setChambreMurSortieCommentaire(?string $chambreMurSortieCommentaire): static
    {
        $this->chambreMurSortieCommentaire = $chambreMurSortieCommentaire;

        return $this;
    }

    public function getChambrePlafondEntreeEtat(): ?string
    {
        return $this->chambrePlafondEntreeEtat;
    }

    public function setChambrePlafondEntreeEtat(string $chambrePlafondEntreeEtat): static
    {
        $this->chambrePlafondEntreeEtat = $chambrePlafondEntreeEtat;

        return $this;
    }

    public function getChambrePlafondEntreeCommentaire(): ?string
    {
        return $this->chambrePlafondEntreeCommentaire;
    }

    public function setChambrePlafondEntreeCommentaire(?string $chambrePlafondEntreeCommentaire): static
    {
        $this->chambrePlafondEntreeCommentaire = $chambrePlafondEntreeCommentaire;

        return $this;
    }

    public function getChambrePlafondSortieEtat(): ?string
    {
        return $this->chambrePlafondSortieEtat;
    }

    public function setChambrePlafondSortieEtat(?string $chambrePlafondSortieEtat): static
    {
        $this->chambrePlafondSortieEtat = $chambrePlafondSortieEtat;

        return $this;
    }

    public function getChambrePlafondSortieCommentaire(): ?string
    {
        return $this->chambrePlafondSortieCommentaire;
    }

    public function setChambrePlafondSortieCommentaire(?string $chambrePlafondSortieCommentaire): static
    {
        $this->chambrePlafondSortieCommentaire = $chambrePlafondSortieCommentaire;

        return $this;
    }

    public function getChambreFenetresEntreeEtat(): ?string
    {
        return $this->chambreFenetresEntreeEtat;
    }

    public function setChambreFenetresEntreeEtat(string $chambreFenetresEntreeEtat): static
    {
        $this->chambreFenetresEntreeEtat = $chambreFenetresEntreeEtat;

        return $this;
    }

    public function getChambreFenetresEntreeCommentaire(): ?string
    {
        return $this->chambreFenetresEntreeCommentaire;
    }

    public function setChambreFenetresEntreeCommentaire(?string $chambreFenetresEntreeCommentaire): static
    {
        $this->chambreFenetresEntreeCommentaire = $chambreFenetresEntreeCommentaire;

        return $this;
    }

    public function getChambreFenetresSortieEtat(): ?string
    {
        return $this->chambreFenetresSortieEtat;
    }

    public function setChambreFenetresSortieEtat(?string $chambreFenetresSortieEtat): static
    {
        $this->chambreFenetresSortieEtat = $chambreFenetresSortieEtat;

        return $this;
    }

    public function getChambreFenetresSortieCommentaire(): ?string
    {
        return $this->chambreFenetresSortieCommentaire;
    }

    public function setChambreFenetresSortieCommentaire(?string $chambreFenetresSortieCommentaire): static
    {
        $this->chambreFenetresSortieCommentaire = $chambreFenetresSortieCommentaire;

        return $this;
    }

    public function getChambrePriseinterupteurEntreeEtat(): ?string
    {
        return $this->chambrePriseinterupteurEntreeEtat;
    }

    public function setChambrePriseinterupteurEntreeEtat(string $chambrePriseinterupteurEntreeEtat): static
    {
        $this->chambrePriseinterupteurEntreeEtat = $chambrePriseinterupteurEntreeEtat;

        return $this;
    }

    public function getChambrePriseinterupteurEntreeCommentaire(): ?string
    {
        return $this->chambrePriseinterupteurEntreeCommentaire;
    }

    public function setChambrePriseinterupteurEntreeCommentaire(?string $chambrePriseinterupteurEntreeCommentaire): static
    {
        $this->chambrePriseinterupteurEntreeCommentaire = $chambrePriseinterupteurEntreeCommentaire;

        return $this;
    }

    public function getChambrePriseinterupteurSortieEtat(): ?string
    {
        return $this->chambrePriseinterupteurSortieEtat;
    }

    public function setChambrePriseinterupteurSortieEtat(?string $chambrePriseinterupteurSortieEtat): static
    {
        $this->chambrePriseinterupteurSortieEtat = $chambrePriseinterupteurSortieEtat;

        return $this;
    }

    public function getChambrePriseinterupteurSortieCommentaire(): ?string
    {
        return $this->chambrePriseinterupteurSortieCommentaire;
    }

    public function setChambrePriseinterupteurSortieCommentaire(?string $chambrePriseinterupteurSortieCommentaire): static
    {
        $this->chambrePriseinterupteurSortieCommentaire = $chambrePriseinterupteurSortieCommentaire;

        return $this;
    }

    public function getChambreArmoireEntreeEtat(): ?string
    {
        return $this->chambreArmoireEntreeEtat;
    }

    public function setChambreArmoireEntreeEtat(string $chambreArmoireEntreeEtat): static
    {
        $this->chambreArmoireEntreeEtat = $chambreArmoireEntreeEtat;

        return $this;
    }

    public function getChambreArmoireEntreeCommentaire(): ?string
    {
        return $this->chambreArmoireEntreeCommentaire;
    }

    public function setChambreArmoireEntreeCommentaire(?string $chambreArmoireEntreeCommentaire): static
    {
        $this->chambreArmoireEntreeCommentaire = $chambreArmoireEntreeCommentaire;

        return $this;
    }

    public function getChambreArmoireSortieEtat(): ?string
    {
        return $this->chambreArmoireSortieEtat;
    }

    public function setChambreArmoireSortieEtat(?string $chambreArmoireSortieEtat): static
    {
        $this->chambreArmoireSortieEtat = $chambreArmoireSortieEtat;

        return $this;
    }

    public function getChambreArmoireSortieCommentaire(): ?string
    {
        return $this->chambreArmoireSortieCommentaire;
    }

    public function setChambreArmoireSortieCommentaire(?string $chambreArmoireSortieCommentaire): static
    {
        $this->chambreArmoireSortieCommentaire = $chambreArmoireSortieCommentaire;

        return $this;
    }

    public function getChambreBureauEntreeEtat(): ?string
    {
        return $this->chambreBureauEntreeEtat;
    }

    public function setChambreBureauEntreeEtat(string $chambreBureauEntreeEtat): static
    {
        $this->chambreBureauEntreeEtat = $chambreBureauEntreeEtat;

        return $this;
    }

    public function getChambreBureauEntreeCommentaire(): ?string
    {
        return $this->chambreBureauEntreeCommentaire;
    }

    public function setChambreBureauEntreeCommentaire(?string $chambreBureauEntreeCommentaire): static
    {
        $this->chambreBureauEntreeCommentaire = $chambreBureauEntreeCommentaire;

        return $this;
    }

    public function getChambreBureauSortieEtat(): ?string
    {
        return $this->chambreBureauSortieEtat;
    }

    public function setChambreBureauSortieEtat(?string $chambreBureauSortieEtat): static
    {
        $this->chambreBureauSortieEtat = $chambreBureauSortieEtat;

        return $this;
    }

    public function getChambreBureauSortieCommentaire(): ?string
    {
        return $this->chambreBureauSortieCommentaire;
    }

    public function setChambreBureauSortieCommentaire(?string $chambreBureauSortieCommentaire): static
    {
        $this->chambreBureauSortieCommentaire = $chambreBureauSortieCommentaire;

        return $this;
    }

    public function getChambreTablechevetEntreeEtat(): ?string
    {
        return $this->chambreTablechevetEntreeEtat;
    }

    public function setChambreTablechevetEntreeEtat(string $chambreTablechevetEntreeEtat): static
    {
        $this->chambreTablechevetEntreeEtat = $chambreTablechevetEntreeEtat;

        return $this;
    }

    public function getChambreTablechevetEntreeCommentaire(): ?string
    {
        return $this->chambreTablechevetEntreeCommentaire;
    }

    public function setChambreTablechevetEntreeCommentaire(?string $chambreTablechevetEntreeCommentaire): static
    {
        $this->chambreTablechevetEntreeCommentaire = $chambreTablechevetEntreeCommentaire;

        return $this;
    }

    public function getChambreTablechevetSortieEtat(): ?string
    {
        return $this->chambreTablechevetSortieEtat;
    }

    public function setChambreTablechevetSortieEtat(?string $chambreTablechevetSortieEtat): static
    {
        $this->chambreTablechevetSortieEtat = $chambreTablechevetSortieEtat;

        return $this;
    }

    public function getChambreTablechevetSortieCommentaire(): ?string
    {
        return $this->chambreTablechevetSortieCommentaire;
    }

    public function setChambreTablechevetSortieCommentaire(?string $chambreTablechevetSortieCommentaire): static
    {
        $this->chambreTablechevetSortieCommentaire = $chambreTablechevetSortieCommentaire;

        return $this;
    }

    public function getChambreChaiseEntreeEtat(): ?string
    {
        return $this->chambreChaiseEntreeEtat;
    }

    public function setChambreChaiseEntreeEtat(string $chambreChaiseEntreeEtat): static
    {
        $this->chambreChaiseEntreeEtat = $chambreChaiseEntreeEtat;

        return $this;
    }

    public function getChambreChaisesEntreeCommentaire(): ?string
    {
        return $this->chambreChaisesEntreeCommentaire;
    }

    public function setChambreChaisesEntreeCommentaire(?string $chambreChaisesEntreeCommentaire): static
    {
        $this->chambreChaisesEntreeCommentaire = $chambreChaisesEntreeCommentaire;

        return $this;
    }

    public function getChambreChaisesSortieEtat(): ?string
    {
        return $this->chambreChaisesSortieEtat;
    }

    public function setChambreChaisesSortieEtat(?string $chambreChaisesSortieEtat): static
    {
        $this->chambreChaisesSortieEtat = $chambreChaisesSortieEtat;

        return $this;
    }

    public function getChambreChaisesSortieCommentaire(): ?string
    {
        return $this->chambreChaisesSortieCommentaire;
    }

    public function setChambreChaisesSortieCommentaire(?string $chambreChaisesSortieCommentaire): static
    {
        $this->chambreChaisesSortieCommentaire = $chambreChaisesSortieCommentaire;

        return $this;
    }

    public function getChambreLitossatureEntreeEtat(): ?string
    {
        return $this->chambreLitossatureEntreeEtat;
    }

    public function setChambreLitossatureEntreeEtat(string $chambreLitossatureEntreeEtat): static
    {
        $this->chambreLitossatureEntreeEtat = $chambreLitossatureEntreeEtat;

        return $this;
    }

    public function getChambreLitossatureEntreeCommentaire(): ?string
    {
        return $this->chambreLitossatureEntreeCommentaire;
    }

    public function setChambreLitossatureEntreeCommentaire(?string $chambreLitossatureEntreeCommentaire): static
    {
        $this->chambreLitossatureEntreeCommentaire = $chambreLitossatureEntreeCommentaire;

        return $this;
    }

    public function getChambreLitossatureSortieEtat(): ?string
    {
        return $this->chambreLitossatureSortieEtat;
    }

    public function setChambreLitossatureSortieEtat(?string $chambreLitossatureSortieEtat): static
    {
        $this->chambreLitossatureSortieEtat = $chambreLitossatureSortieEtat;

        return $this;
    }

    public function getChambreLitossatureSortieCommentaire(): ?string
    {
        return $this->chambreLitossatureSortieCommentaire;
    }

    public function setChambreLitossatureSortieCommentaire(?string $chambreLitossatureSortieCommentaire): static
    {
        $this->chambreLitossatureSortieCommentaire = $chambreLitossatureSortieCommentaire;

        return $this;
    }

    public function getChambreMatelasEntreeEtat(): ?string
    {
        return $this->chambreMatelasEntreeEtat;
    }

    public function setChambreMatelasEntreeEtat(string $chambreMatelasEntreeEtat): static
    {
        $this->chambreMatelasEntreeEtat = $chambreMatelasEntreeEtat;

        return $this;
    }

    public function getChambreMatelasEntreeCommentaire(): ?string
    {
        return $this->chambreMatelasEntreeCommentaire;
    }

    public function setChambreMatelasEntreeCommentaire(?string $chambreMatelasEntreeCommentaire): static
    {
        $this->chambreMatelasEntreeCommentaire = $chambreMatelasEntreeCommentaire;

        return $this;
    }

    public function getChambreMatelasSortieEtat(): ?string
    {
        return $this->chambreMatelasSortieEtat;
    }

    public function setChambreMatelasSortieEtat(?string $chambreMatelasSortieEtat): static
    {
        $this->chambreMatelasSortieEtat = $chambreMatelasSortieEtat;

        return $this;
    }

    public function getChambreMatelasSortieCommentaire(): ?string
    {
        return $this->chambreMatelasSortieCommentaire;
    }

    public function setChambreMatelasSortieCommentaire(?string $chambreMatelasSortieCommentaire): static
    {
        $this->chambreMatelasSortieCommentaire = $chambreMatelasSortieCommentaire;

        return $this;
    }

    public function getChambreOreillerEntreeEtat(): ?string
    {
        return $this->chambreOreillerEntreeEtat;
    }

    public function setChambreOreillerEntreeEtat(string $chambreOreillerEntreeEtat): static
    {
        $this->chambreOreillerEntreeEtat = $chambreOreillerEntreeEtat;

        return $this;
    }

    public function getChambreOreillerEntreeCommentaire(): ?string
    {
        return $this->chambreOreillerEntreeCommentaire;
    }

    public function setChambreOreillerEntreeCommentaire(?string $chambreOreillerEntreeCommentaire): static
    {
        $this->chambreOreillerEntreeCommentaire = $chambreOreillerEntreeCommentaire;

        return $this;
    }

    public function getChambreOreillerSortieEtat(): ?string
    {
        return $this->chambreOreillerSortieEtat;
    }

    public function setChambreOreillerSortieEtat(?string $chambreOreillerSortieEtat): static
    {
        $this->chambreOreillerSortieEtat = $chambreOreillerSortieEtat;

        return $this;
    }

    public function getChambreOreillerSortieCommentaire(): ?string
    {
        return $this->chambreOreillerSortieCommentaire;
    }

    public function setChambreOreillerSortieCommentaire(?string $chambreOreillerSortieCommentaire): static
    {
        $this->chambreOreillerSortieCommentaire = $chambreOreillerSortieCommentaire;

        return $this;
    }

    public function getChambrePrisetelephoneEntreeEtat(): ?string
    {
        return $this->chambrePrisetelephoneEntreeEtat;
    }

    public function setChambrePrisetelephoneEntreeEtat(string $chambrePrisetelephoneEntreeEtat): static
    {
        $this->chambrePrisetelephoneEntreeEtat = $chambrePrisetelephoneEntreeEtat;

        return $this;
    }

    public function getChambrePrisetelephoneEntreeCommentaire(): ?string
    {
        return $this->chambrePrisetelephoneEntreeCommentaire;
    }

    public function setChambrePrisetelephoneEntreeCommentaire(?string $chambrePrisetelephoneEntreeCommentaire): static
    {
        $this->chambrePrisetelephoneEntreeCommentaire = $chambrePrisetelephoneEntreeCommentaire;

        return $this;
    }

    public function getChambrePrisetelephoneSortieEtat(): ?string
    {
        return $this->chambrePrisetelephoneSortieEtat;
    }

    public function setChambrePrisetelephoneSortieEtat(?string $chambrePrisetelephoneSortieEtat): static
    {
        $this->chambrePrisetelephoneSortieEtat = $chambrePrisetelephoneSortieEtat;

        return $this;
    }

    public function getChambrePrisetelephoneSortieCommentaire(): ?string
    {
        return $this->chambrePrisetelephoneSortieCommentaire;
    }

    public function setChambrePrisetelephoneSortieCommentaire(?string $chambrePrisetelephoneSortieCommentaire): static
    {
        $this->chambrePrisetelephoneSortieCommentaire = $chambrePrisetelephoneSortieCommentaire;

        return $this;
    }

    public function getChambrePriseinformatiquetvEntreeEtat(): ?string
    {
        return $this->chambrePriseinformatiquetvEntreeEtat;
    }

    public function setChambrePriseinformatiquetvEntreeEtat(string $chambrePriseinformatiquetvEntreeEtat): static
    {
        $this->chambrePriseinformatiquetvEntreeEtat = $chambrePriseinformatiquetvEntreeEtat;

        return $this;
    }

    public function getChambrePriseinformatiquetvEntreeCommentaire(): ?string
    {
        return $this->chambrePriseinformatiquetvEntreeCommentaire;
    }

    public function setChambrePriseinformatiquetvEntreeCommentaire(?string $chambrePriseinformatiquetvEntreeCommentaire): static
    {
        $this->chambrePriseinformatiquetvEntreeCommentaire = $chambrePriseinformatiquetvEntreeCommentaire;

        return $this;
    }

    public function getChambrePriseinformatiquetvSortieEtat(): ?string
    {
        return $this->chambrePriseinformatiquetvSortieEtat;
    }

    public function setChambrePriseinformatiquetvSortieEtat(?string $chambrePriseinformatiquetvSortieEtat): static
    {
        $this->chambrePriseinformatiquetvSortieEtat = $chambrePriseinformatiquetvSortieEtat;

        return $this;
    }

    public function getChambrePriseinformatiquetvSortieCommentaire(): ?string
    {
        return $this->chambrePriseinformatiquetvSortieCommentaire;
    }

    public function setChambrePriseinformatiquetvSortieCommentaire(?string $chambrePriseinformatiquetvSortieCommentaire): static
    {
        $this->chambrePriseinformatiquetvSortieCommentaire = $chambrePriseinformatiquetvSortieCommentaire;

        return $this;
    }

    public function getChambreLuminaireEntreeEtat(): ?string
    {
        return $this->chambreLuminaireEntreeEtat;
    }

    public function setChambreLuminaireEntreeEtat(string $chambreLuminaireEntreeEtat): static
    {
        $this->chambreLuminaireEntreeEtat = $chambreLuminaireEntreeEtat;

        return $this;
    }

    public function getChambreLuminaireEntreeCommentaire(): ?string
    {
        return $this->chambreLuminaireEntreeCommentaire;
    }

    public function setChambreLuminaireEntreeCommentaire(?string $chambreLuminaireEntreeCommentaire): static
    {
        $this->chambreLuminaireEntreeCommentaire = $chambreLuminaireEntreeCommentaire;

        return $this;
    }

    public function getChambreLuminaireSortieEtat(): ?string
    {
        return $this->chambreLuminaireSortieEtat;
    }

    public function setChambreLuminaireSortieEtat(?string $chambreLuminaireSortieEtat): static
    {
        $this->chambreLuminaireSortieEtat = $chambreLuminaireSortieEtat;

        return $this;
    }

    public function getChambreLuminaireSortieCommentaire(): ?string
    {
        return $this->chambreLuminaireSortieCommentaire;
    }

    public function setChambreLuminaireSortieCommentaire(?string $chambreLuminaireSortieCommentaire): static
    {
        $this->chambreLuminaireSortieCommentaire = $chambreLuminaireSortieCommentaire;

        return $this;
    }

    public function getsdbSolEntreeEtat(): ?string
    {
        return $this->sdbSolEntreeEtat;
    }

    public function setsdbSolEntreeEtat(string $sdbSolEntreeEtat): static
    {
        $this->sdbSolEntreeEtat = $sdbSolEntreeEtat;

        return $this;
    }

    public function getsdbSolEntreeCommentaire(): ?string
    {
        return $this->sdbSolEntreeCommentaire;
    }

    public function setsdbSolEntreeCommentaire(?string $sdbSolEntreeCommentaire): static
    {
        $this->sdbSolEntreeCommentaire = $sdbSolEntreeCommentaire;

        return $this;
    }

    public function getsdbSolSortieEtat(): ?string
    {
        return $this->sdbSolSortieEtat;
    }

    public function setsdbSolSortieEtat(?string $sdbSolSortieEtat): static
    {
        $this->sdbSolSortieEtat = $sdbSolSortieEtat;

        return $this;
    }

    public function getsdbSolSortieCommentaire(): ?string
    {
        return $this->sdbSolSortieCommentaire;
    }

    public function setsdbSolSortieCommentaire(?string $sdbSolSortieCommentaire): static
    {
        $this->sdbSolSortieCommentaire = $sdbSolSortieCommentaire;

        return $this;
    }

    public function getsdbMurEntreeEtat(): ?string
    {
        return $this->sdbMurEntreeEtat;
    }

    public function setsdbMurEntreeEtat(string $sdbMurEntreeEtat): static
    {
        $this->sdbMurEntreeEtat = $sdbMurEntreeEtat;

        return $this;
    }

    public function getsdbMurEntreeCommentaire(): ?string
    {
        return $this->sdbMurEntreeCommentaire;
    }

    public function setsdbMurEntreeCommentaire(?string $sdbMurEntreeCommentaire): static
    {
        $this->sdbMurEntreeCommentaire = $sdbMurEntreeCommentaire;

        return $this;
    }

    public function getsdbMurSortieEtat(): ?string
    {
        return $this->sdbMurSortieEtat;
    }

    public function setsdbMurSortieEtat(?string $sdbMurSortieEtat): static
    {
        $this->sdbMurSortieEtat = $sdbMurSortieEtat;

        return $this;
    }

    public function getsdbMurSortieCommentaire(): ?string
    {
        return $this->sdbMurSortieCommentaire;
    }

    public function setsdbMurSortieCommentaire(?string $sdbMurSortieCommentaire): static
    {
        $this->sdbMurSortieCommentaire = $sdbMurSortieCommentaire;

        return $this;
    }

    public function getsdbPlafondEntreeEtat(): ?string
    {
        return $this->sdbPlafondEntreeEtat;
    }

    public function setsdbPlafondEntreeEtat(string $sdbPlafondEntreeEtat): static
    {
        $this->sdbPlafondEntreeEtat = $sdbPlafondEntreeEtat;

        return $this;
    }

    public function getsdbPlafondEntreeCommentaire(): ?string
    {
        return $this->sdbPlafondEntreeCommentaire;
    }

    public function setsdbPlafondEntreeCommentaire(?string $sdbPlafondEntreeCommentaire): static
    {
        $this->sdbPlafondEntreeCommentaire = $sdbPlafondEntreeCommentaire;

        return $this;
    }

    public function getsdbPlafondSortieEtat(): ?string
    {
        return $this->sdbPlafondSortieEtat;
    }

    public function setsdbPlafondSortieEtat(?string $sdbPlafondSortieEtat): static
    {
        $this->sdbPlafondSortieEtat = $sdbPlafondSortieEtat;

        return $this;
    }

    public function getsdbPlafondSortieCommentaire(): ?string
    {
        return $this->sdbPlafondSortieCommentaire;
    }

    public function setsdbPlafondSortieCommentaire(?string $sdbPlafondSortieCommentaire): static
    {
        $this->sdbPlafondSortieCommentaire = $sdbPlafondSortieCommentaire;

        return $this;
    }

    public function getsdbPrisesinterrupteursEntreeEtat(): ?string
    {
        return $this->sdbPrisesinterrupteursEntreeEtat;
    }

    public function setsdbPrisesinterrupteursEntreeEtat(string $sdbPrisesinterrupteursEntreeEtat): static
    {
        $this->sdbPrisesinterrupteursEntreeEtat = $sdbPrisesinterrupteursEntreeEtat;

        return $this;
    }

    public function getsdbPrisesinterrupteureEntreeCommentaire(): ?string
    {
        return $this->sdbPrisesinterrupteureEntreeCommentaire;
    }

    public function setsdbPrisesinterrupteureEntreeCommentaire(?string $sdbPrisesinterrupteureEntreeCommentaire): static
    {
        $this->sdbPrisesinterrupteureEntreeCommentaire = $sdbPrisesinterrupteureEntreeCommentaire;

        return $this;
    }

    public function getsdbPrisesinterrupteursSortieEtat(): ?string
    {
        return $this->sdbPrisesinterrupteursSortieEtat;
    }

    public function setsdbPrisesinterrupteursSortieEtat(?string $sdbPrisesinterrupteursSortieEtat): static
    {
        $this->sdbPrisesinterrupteursSortieEtat = $sdbPrisesinterrupteursSortieEtat;

        return $this;
    }

    public function getsdbPrisesinterrupteursSortieCommentaire(): ?string
    {
        return $this->sdbPrisesinterrupteursSortieCommentaire;
    }

    public function setsdbPrisesinterrupteursSortieCommentaire(?string $sdbPrisesinterrupteursSortieCommentaire): static
    {
        $this->sdbPrisesinterrupteursSortieCommentaire = $sdbPrisesinterrupteursSortieCommentaire;

        return $this;
    }

    public function getsdbVasquelavaboEntreeEtat(): ?string
    {
        return $this->sdbVasquelavaboEntreeEtat;
    }

    public function setsdbVasquelavaboEntreeEtat(string $sdbVasquelavaboEntreeEtat): static
    {
        $this->sdbVasquelavaboEntreeEtat = $sdbVasquelavaboEntreeEtat;

        return $this;
    }

    public function getsdbVasquelavaboEntreeCommentaire(): ?string
    {
        return $this->sdbVasquelavaboEntreeCommentaire;
    }

    public function setsdbVasquelavaboEntreeCommentaire(?string $sdbVasquelavaboEntreeCommentaire): static
    {
        $this->sdbVasquelavaboEntreeCommentaire = $sdbVasquelavaboEntreeCommentaire;

        return $this;
    }

    public function getsdbVasquelavaboSortieEtat(): ?string
    {
        return $this->sdbVasquelavaboSortieEtat;
    }

    public function setsdbVasquelavaboSortieEtat(?string $sdbVasquelavaboSortieEtat): static
    {
        $this->sdbVasquelavaboSortieEtat = $sdbVasquelavaboSortieEtat;

        return $this;
    }

    public function getsdbVasquelavaboSortieCommentaire(): ?string
    {
        return $this->sdbVasquelavaboSortieCommentaire;
    }

    public function setsdbVasquelavaboSortieCommentaire(?string $sdbVasquelavaboSortieCommentaire): static
    {
        $this->sdbVasquelavaboSortieCommentaire = $sdbVasquelavaboSortieCommentaire;

        return $this;
    }

    public function getsdbMiroirEntreeEtat(): ?string
    {
        return $this->sdbMiroirEntreeEtat;
    }

    public function setsdbMiroirEntreeEtat(string $sdbMiroirEntreeEtat): static
    {
        $this->sdbMiroirEntreeEtat = $sdbMiroirEntreeEtat;

        return $this;
    }

    public function getsdbMiroirEntreeCommentaire(): ?string
    {
        return $this->sdbMiroirEntreeCommentaire;
    }

    public function setsdbMiroirEntreeCommentaire(?string $sdbMiroirEntreeCommentaire): static
    {
        $this->sdbMiroirEntreeCommentaire = $sdbMiroirEntreeCommentaire;

        return $this;
    }

    public function getsdbMiroirSortieEtat(): ?string
    {
        return $this->sdbMiroirSortieEtat;
    }

    public function setsdbMiroirSortieEtat(?string $sdbMiroirSortieEtat): static
    {
        $this->sdbMiroirSortieEtat = $sdbMiroirSortieEtat;

        return $this;
    }

    public function getsdbMiroirSortieCommentaire(): ?string
    {
        return $this->sdbMiroirSortieCommentaire;
    }

    public function setsdbMiroirSortieCommentaire(?string $sdbMiroirSortieCommentaire): static
    {
        $this->sdbMiroirSortieCommentaire = $sdbMiroirSortieCommentaire;

        return $this;
    }

    public function getsdbToilettesEntreeEtat(): ?string
    {
        return $this->sdbToilettesEntreeEtat;
    }

    public function setsdbToilettesEntreeEtat(string $sdbToilettesEntreeEtat): static
    {
        $this->sdbToilettesEntreeEtat = $sdbToilettesEntreeEtat;

        return $this;
    }

    public function getsdbToilettesEntreeCommentaire(): ?string
    {
        return $this->sdbToilettesEntreeCommentaire;
    }

    public function setsdbToilettesEntreeCommentaire(?string $sdbToilettesEntreeCommentaire): static
    {
        $this->sdbToilettesEntreeCommentaire = $sdbToilettesEntreeCommentaire;

        return $this;
    }

    public function getsdbToilettesSortieEtat(): ?string
    {
        return $this->sdbToilettesSortieEtat;
    }

    public function setsdbToilettesSortieEtat(?string $sdbToilettesSortieEtat): static
    {
        $this->sdbToilettesSortieEtat = $sdbToilettesSortieEtat;

        return $this;
    }

    public function getsdbToilettesSortieCommentaire(): ?string
    {
        return $this->sdbToilettesSortieCommentaire;
    }

    public function setsdbToilettesSortieCommentaire(?string $sdbToilettesSortieCommentaire): static
    {
        $this->sdbToilettesSortieCommentaire = $sdbToilettesSortieCommentaire;

        return $this;
    }

    public function getsdbAbattanttoilettesEntreeEtat(): ?string
    {
        return $this->sdbAbattanttoilettesEntreeEtat;
    }

    public function setsdbAbattanttoilettesEntreeEtat(string $sdbAbattanttoilettesEntreeEtat): static
    {
        $this->sdbAbattanttoilettesEntreeEtat = $sdbAbattanttoilettesEntreeEtat;

        return $this;
    }

    public function getsdbAbattanttoilettesEntreeCommentaire(): ?string
    {
        return $this->sdbAbattanttoilettesEntreeCommentaire;
    }

    public function setsdbAbattanttoilettesEntreeCommentaire(?string $sdbAbattanttoilettesEntreeCommentaire): static
    {
        $this->sdbAbattanttoilettesEntreeCommentaire = $sdbAbattanttoilettesEntreeCommentaire;

        return $this;
    }

    public function getsdbAbattanttoilettesSortieEtat(): ?string
    {
        return $this->sdbAbattanttoilettesSortieEtat;
    }

    public function setsdbAbattanttoilettesSortieEtat(?string $sdbAbattanttoilettesSortieEtat): static
    {
        $this->sdbAbattanttoilettesSortieEtat = $sdbAbattanttoilettesSortieEtat;

        return $this;
    }

    public function getsdbAbattanttoilettesSortieCommentaire(): ?string
    {
        return $this->sdbAbattanttoilettesSortieCommentaire;
    }

    public function setsdbAbattanttoilettesSortieCommentaire(?string $sdbAbattanttoilettesSortieCommentaire): static
    {
        $this->sdbAbattanttoilettesSortieCommentaire = $sdbAbattanttoilettesSortieCommentaire;

        return $this;
    }

    public function getsdbPatereEntreeEtat(): ?string
    {
        return $this->sdbPatereEntreeEtat;
    }

    public function setsdbPatereEntreeEtat(string $sdbPatereEntreeEtat): static
    {
        $this->sdbPatereEntreeEtat = $sdbPatereEntreeEtat;

        return $this;
    }

    public function getsdbPatereEntreeCommentaire(): ?string
    {
        return $this->sdbPatereEntreeCommentaire;
    }

    public function setsdbPatereEntreeCommentaire(?string $sdbPatereEntreeCommentaire): static
    {
        $this->sdbPatereEntreeCommentaire = $sdbPatereEntreeCommentaire;

        return $this;
    }

    public function getsdbPatereSortieEtat(): ?string
    {
        return $this->sdbPatereSortieEtat;
    }

    public function setsdbPatereSortieEtat(?string $sdbPatereSortieEtat): static
    {
        $this->sdbPatereSortieEtat = $sdbPatereSortieEtat;

        return $this;
    }

    public function getsdbPatereSortieCommentaire(): ?string
    {
        return $this->sdbPatereSortieCommentaire;
    }

    public function setsdbPatereSortieCommentaire(?string $sdbPatereSortieCommentaire): static
    {
        $this->sdbPatereSortieCommentaire = $sdbPatereSortieCommentaire;

        return $this;
    }

    public function getsdbDoucheEntreeEtat(): ?string
    {
        return $this->sdbDoucheEntreeEtat;
    }

    public function setsdbDoucheEntreeEtat(string $sdbDoucheEntreeEtat): static
    {
        $this->sdbDoucheEntreeEtat = $sdbDoucheEntreeEtat;

        return $this;
    }

    public function getsdbDoucheEntreeCommentaire(): ?string
    {
        return $this->sdbDoucheEntreeCommentaire;
    }

    public function setsdbDoucheEntreeCommentaire(?string $sdbDoucheEntreeCommentaire): static
    {
        $this->sdbDoucheEntreeCommentaire = $sdbDoucheEntreeCommentaire;

        return $this;
    }

    public function getsdbDoucheSortieEtat(): ?string
    {
        return $this->sdbDoucheSortieEtat;
    }

    public function setsdbDoucheSortieEtat(?string $sdbDoucheSortieEtat): static
    {
        $this->sdbDoucheSortieEtat = $sdbDoucheSortieEtat;

        return $this;
    }

    public function getsdbDoucheSortieCommentaire(): ?string
    {
        return $this->sdbDoucheSortieCommentaire;
    }

    public function setsdbDoucheSortieCommentaire(?string $sdbDoucheSortieCommentaire): static
    {
        $this->sdbDoucheSortieCommentaire = $sdbDoucheSortieCommentaire;

        return $this;
    }

    public function getsdbPardoucheEntreeEtat(): ?string
    {
        return $this->sdbPardoucheEntreeEtat;
    }

    public function setsdbPardoucheEntreeEtat(string $sdbPardoucheEntreeEtat): static
    {
        $this->sdbPardoucheEntreeEtat = $sdbPardoucheEntreeEtat;

        return $this;
    }

    public function getsdbPardoucheEntreeCommentaire(): ?string
    {
        return $this->sdbPardoucheEntreeCommentaire;
    }

    public function setsdbPardoucheEntreeCommentaire(?string $sdbPardoucheEntreeCommentaire): static
    {
        $this->sdbPardoucheEntreeCommentaire = $sdbPardoucheEntreeCommentaire;

        return $this;
    }

    public function getsdbPardoucheSortieEtat(): ?string
    {
        return $this->sdbPardoucheSortieEtat;
    }

    public function setsdbPardoucheSortieEtat(?string $sdbPardoucheSortieEtat): static
    {
        $this->sdbPardoucheSortieEtat = $sdbPardoucheSortieEtat;

        return $this;
    }

    public function getsdbPardoucheSortieCommentaire(): ?string
    {
        return $this->sdbPardoucheSortieCommentaire;
    }

    public function setsdbPardoucheSortieCommentaire(?string $sdbPardoucheSortieCommentaire): static
    {
        $this->sdbPardoucheSortieCommentaire = $sdbPardoucheSortieCommentaire;

        return $this;
    }

    public function getChambre(): ?Chambre
    {
        return $this->chambre;
    }

    public function setChambre(?Chambre $chambre): static
    {
        $this->chambre = $chambre;

        return $this;
    }

    public function isStatut(): ?bool
    {
        return $this->statut;
    }

    public function setStatut(?bool $statut): static
    {
        $this->statut = $statut;

        return $this;
    }
}
