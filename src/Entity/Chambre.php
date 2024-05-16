<?php

namespace App\Entity;

use App\Repository\ChambreRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ChambreRepository::class)]
class Chambre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $numero = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $dateEntree = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $section = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $nom = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $prenom = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $handicap = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $capacite_lit = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $batiment = null;

    #[ORM\Column(nullable: true)]
    private ?int $etage = null;

    /**
     * @var Collection<int, Etatlieux>
     */
    #[ORM\OneToMany(targetEntity: Etatlieux::class, mappedBy: 'chambre')]
    private Collection $etatslieux;

    public function __construct()
    {
        $this->etatslieux = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumero(): ?int
    {
        return $this->numero;
    }

    public function setNumero(int $numero): static
    {
        $this->numero = $numero;

        return $this;
    }

    public function getDateEntree(): ?\DateTimeImmutable
    {
        return $this->dateEntree;
    }

    public function setDateEntree(?\DateTimeImmutable $dateEntree): static
    {
        $this->dateEntree = $dateEntree;

        return $this;
    }

    public function getSection(): ?string
    {
        return $this->section;
    }

    public function setSection(?string $section): static
    {
        $this->section = $section;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getHandicap(): ?string
    {
        return $this->handicap;
    }

    public function setHandicap(?string $handicap): static
    {
        $this->handicap = $handicap;

        return $this;
    }

    public function getCapaciteLit(): ?string
    {
        return $this->capacite_lit;
    }

    public function setCapaciteLit(?string $capacite_lit): static
    {
        $this->capacite_lit = $capacite_lit;

        return $this;
    }

    public function getBatiment(): ?string
    {
        return $this->batiment;
    }

    public function setBatiment(?string $batiment): static
    {
        $this->batiment = $batiment;

        return $this;
    }

    public function getEtage(): ?int
    {
        return $this->etage;
    }

    public function setEtage(?int $etage): static
    {
        $this->etage = $etage;

        return $this;
    }

    /**
     * @return Collection<int, Etatlieux>
     */
    public function getEtatslieux(): Collection
    {
        return $this->etatslieux;
    }

    public function addEtatslieux(Etatlieux $etatslieux): static
    {
        if (!$this->etatslieux->contains($etatslieux)) {
            $this->etatslieux->add($etatslieux);
            $etatslieux->setChambre($this);
        }

        return $this;
    }

    public function removeEtatslieux(Etatlieux $etatslieux): static
    {
        if ($this->etatslieux->removeElement($etatslieux)) {
            // set the owning side to null (unless already changed)
            if ($etatslieux->getChambre() === $this) {
                $etatslieux->setChambre(null);
            }
        }

        return $this;
    }
}
