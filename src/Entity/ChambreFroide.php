<?php

namespace App\Entity;

use App\Repository\ChambreFroideRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ChambreFroideRepository::class)
 */
class ChambreFroide
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $subtitle;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $temperatures;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $hygrometries;

    /**
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $temprelever;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $hygrorelever;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getSubtitle(): ?string
    {
        return $this->subtitle;
    }

    public function setSubtitle(string $subtitle): self
    {
        $this->subtitle = $subtitle;

        return $this;
    }

    public function getTemperatures(): ?string
    {
        return $this->temperatures;
    }

    public function setTemperatures(string $temperatures): self
    {
        $this->temperatures = $temperatures;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getTempRelever(): ?string
    {
        return $this->temprelever;
    }

    public function setTempRelever(string $tempRelever): self
    {
        $this->temprelever = $tempRelever;

        return $this;
    }

    public function getHygroRelever(): ?string
    {
        return $this->hygrorelever;
    }

    public function setHygroRelever(string $hygroRelever): self
    {
        $this->hygrorelever = $hygroRelever;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getHygrometries()
    {
        return $this->hygrometries;
    }

    /**
     * @param mixed $hygrometries
     */
    public function setHygrometries(string $hygrometries): void
    {
        $this->hygrometries = $hygrometries;
    }
}
