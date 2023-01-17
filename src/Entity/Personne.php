<?php

namespace App\Entity;

use App\Repository\PersonneRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PersonneRepository::class)]
class Personne
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $personne_id = null;

    #[ORM\Column(length: 20)]
    private ?string $pseudo = null;

    #[ORM\Column(length: 20)]
    private ?string $email = null;

    #[ORM\Column(length: 20)]
    private ?string $mdp = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $date_crea = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $date_modif = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $date_suppr = null;

    #[ORM\Column(length: 255)]
    private ?string $relation = null;



    public function __construct()
    {
        $this->Personne = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPersonneId(): ?int
    {
        return $this->personne_id;
    }

    public function setPersonneId(int $personne_id): self
    {
        $this->personne_id = $personne_id;

        return $this;
    }

    public function getPseudo(): ?string
    {
        return $this->pseudo;
    }

    public function setPseudo(string $pseudo): self
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getMdp(): ?string
    {
        return $this->mdp;
    }

    public function setMdp(string $mdp): self
    {
        $this->mdp = $mdp;

        return $this;
    }

    public function getDateCrea(): ?\DateTimeInterface
    {
        return $this->date_crea;
    }

    public function setDateCrea(\DateTimeInterface $date_crea): self
    {
        $this->date_crea = $date_crea;

        return $this;
    }

    public function getDateModif(): ?\DateTimeInterface
    {
        return $this->date_modif;
    }

    public function setDateModif(\DateTimeInterface $date_modif): self
    {
        $this->date_modif = $date_modif;

        return $this;
    }

    public function getDateSuppr(): ?\DateTimeInterface
    {
        return $this->date_suppr;
    }

    public function setDateSuppr(\DateTimeInterface $date_suppr): self
    {
        $this->date_suppr = $date_suppr;

        return $this;
    }

    public function getRelation(): ?string
    {
        return $this->relation;
    }

    public function setRelation(string $relation): self
    {
        $this->relation = $relation;

        return $this;
    }

    /**
     * @return Collection<int, Catégorie>
     */
    public function getPersonne(): Collection
    {
        return $this->Personne;
    }

    public function addPersonne(Categorie $personne): self
    {
        if (!$this->Personne->contains($personne)) {
            $this->Personne->add($personne);
            $personne->setPersonne($this);
        }

        return $this;
    }

    public function removePersonne(Categorie $personne): self
    {
        if ($this->Personne->removeElement($personne)) {
            // set the owning side to null (unless already changed)
            if ($personne->getPersonne() === $this) {
                $personne->setPersonne(null);
            }
        }

        return $this;
    }
}
