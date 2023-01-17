<?php

namespace App\Entity;

use App\Repository\NewsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: NewsRepository::class)]
class News
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $news_id = null;

    #[ORM\Column(length: 30)]
    private ?string $titre = null;

    #[ORM\Column(length: 20)]
    private ?string $slug = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_debut_affichage = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_fin_affichage = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_creation = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $id_creation = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_modif = null;

    #[ORM\Column]
    private ?int $id_modif = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_fin = null;

    #[ORM\Column]
    private ?int $id_suppr = null;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNewsId(): ?int
    {
        return $this->news_id;
    }

    public function setNewsId(int $news_id): self
    {
        $this->news_id = $news_id;

        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    public function getDateDebutAffichage(): ?\DateTimeInterface
    {
        return $this->date_debut_affichage;
    }

    public function setDateDebutAffichage(\DateTimeInterface $date_debut_affichage): self
    {
        $this->date_debut_affichage = $date_debut_affichage;

        return $this;
    }

    public function getDateFinAffichage(): ?\DateTimeInterface
    {
        return $this->date_fin_affichage;
    }

    public function setDateFinAffichage(\DateTimeInterface $date_fin_affichage): self
    {
        $this->date_fin_affichage = $date_fin_affichage;

        return $this;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->date_creation;
    }

    public function setDateCreation(\DateTimeInterface $date_creation): self
    {
        $this->date_creation = $date_creation;

        return $this;
    }

    public function getIdCreation(): ?\DateTimeInterface
    {
        return $this->id_creation;
    }

    public function setIdCreation(\DateTimeInterface $id_creation): self
    {
        $this->id_creation = $id_creation;

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

    public function getIdModif(): ?int
    {
        return $this->id_modif;
    }

    public function setIdModif(int $id_modif): self
    {
        $this->id_modif = $id_modif;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->date_fin;
    }

    public function setDateFin(\DateTimeInterface $date_fin): self
    {
        $this->date_fin = $date_fin;

        return $this;
    }

    public function getIdSuppr(): ?int
    {
        return $this->id_suppr;
    }

    public function setIdSuppr(int $id_suppr): self
    {
        $this->id_suppr = $id_suppr;

        return $this;
    }

    public function getCategorie(): ?Categorie
    {
        return $this->categorie;
    }

    public function setCategorie(?Catégorie $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }
}
