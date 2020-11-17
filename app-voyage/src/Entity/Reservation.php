<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReservationRepository::class)
 */
class Reservation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombreDePersonne;

    /**
     * @ORM\Column(type="date")
     */
    private $DateReservation;

    /**
     * @ORM\ManyToOne(targetEntity=Voyage::class, inversedBy="reservations")
     * @ORM\JoinColumn(nullable=false)
     */
    private $voyage;

    /**
     * @ORM\ManyToOne(targetEntity=UserInfo::class, inversedBy="reservations")
     */
    private $UserInfo;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombreDePersonne(): ?int
    {
        return $this->nombreDePersonne;
    }

    public function setNombreDePersonne(int $nombreDePersonne): self
    {
        $this->nombreDePersonne = $nombreDePersonne;

        return $this;
    }

    public function getDateReservation(): ?\DateTimeInterface
    {
        return $this->DateReservation;
    }

    public function setDateReservation(\DateTimeInterface $DateReservation): self
    {
        $this->DateReservation = $DateReservation;

        return $this;
    }

    public function getVoyage(): ?Voyage
    {
        return $this->voyage;
    }

    public function setVoyage(?Voyage $voyage): self
    {
        $this->voyage = $voyage;

        return $this;
    }

    public function getUserInfo(): ?UserInfo
    {
        return $this->UserInfo;
    }

    public function setUserInfo(?UserInfo $UserInfo): self
    {
        $this->UserInfo = $UserInfo;

        return $this;
    }
}
