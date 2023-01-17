<?php

namespace App\Entity;

use App\Repository\CategorieNewsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategorieNewsRepository::class)]
class CategorieNews
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $news_id = null;

    #[ORM\Column]
    private ?int $categorie_id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $date_crea = null;

    #[ORM\Column]
    private ?int $id_crea = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $date_suppr = null;

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

    public function getIdCrea(): ?int
    {
        return $this->id_crea;
    }

    public function setIdCrea(int $id_crea): self
    {
        $this->id_crea = $id_crea;

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
}
