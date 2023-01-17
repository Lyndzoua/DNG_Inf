<?php

namespace App\Entity;

use App\Repository\CatégorieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategorieRepository::class)]
class Categorie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $categorie_id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\Datetime $date_crea = null;

    #[ORM\Column(length: 30)]
    private ?string $titre = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $date_modif = null;

    #[ORM\Column]
    private ?int $id_modif = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $date_suppr = null;

    #[ORM\Column]
    private ?int $id_suppr = null;



    public function __construct()
    {
        $this->News = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCategorieId(): ?int
    {
        return $this->categorie_id;
    }

    public function setCategorieId(int $categorie_id): self
    {
        $this->categorie_id = $categorie_id;

        return $this;
    }

    public function getDateCrea(): ?\DateTime
    {
        return $this->date_crea;
    }

    public function setDateCrea(\DateTime $date_crea): self
    {
        $this->date_crea = $date_crea;

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

    public function getDateModif(): ?\DateTime
    {
        return $this->date_modif;
    }

    public function setDateModif(\DateTime $date_modif): self
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

    public function getDateSuppr(): ?\DateTime
    {
        return $this->date_suppr;
    }

    public function setDateSuppr(\DateTime $date_suppr): self
    {
        $this->date_suppr = $date_suppr;

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

    /**
     * @return Collection<int, News>
     */
    public function getNews(): Collection
    {
        return $this->News;
    }

    public function addNews(News $news): self
    {
        if (!$this->News->contains($news)) {
            $this->News->add($news);
            $news->setCategorie($this);
        }

        return $this;
    }

    public function removeNews(News $news): self
    {
        if ($this->News->removeElement($news)) {
            // set the owning side to null (unless already changed)
            if ($news->getCategorie() === $this) {
                $news->setCategorie(null);
            }
        }

        return $this;
    }

    public function getPersonne(): ?Personne
    {
        return $this->personne;
    }

    public function setPersonne(?Personne $personne): self
    {
        $this->personne = $personne;

        return $this;
    }
}
