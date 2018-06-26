<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ApplicationRepository")
 */
class Application
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=32)
     */
    private $firstName;

    /**
     * @ORM\Column(type="string", length=32)
     */
    private $lastName;

    /**
     * @ORM\Column(type="string", length=64, unique=true)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=10), unique=true
     */
    private $phone;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $street;

    /**
     * @ORM\Column(type="string", length=5)
     */
    private $ZIPCode;

    /**
     * @ORM\Column(type="string", length=32)
     */
    private $town;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $job;

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $dayTime;

    /**
     * @ORM\Column(type="boolean")
     */
    private $drugs;

    public function getId()
    {
        return $this->id;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

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

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getStreet(): ?string
    {
        return $this->street;
    }

    public function setStreet(string $street): self
    {
        $this->street = $street;

        return $this;
    }

    public function getZIPCode(): ?string
    {
        return $this->ZIPCode;
    }

    public function setZIPCode(string $ZIPCode): self
    {
        $this->ZIPCode = $ZIPCode;

        return $this;
    }

    public function getTown(): ?string
    {
        return $this->town;
    }

    public function setTown(string $town): self
    {
        $this->town = $town;

        return $this;
    }

    public function getJob(): ?string
    {
        return $this->job;
    }

    public function setJob(string $job): self
    {
        $this->job = $job;

        return $this;
    }

    public function getJAPD(): ?string
    {
        return $this->JAPD;
    }

    public function setJAPD(string $JAPD): self
    {
        $this->JAPD = $JAPD;

        return $this;
    }

    public function getDayTime(): ?string
    {
        return $this->dayTime;
    }

    public function setDayTime(?string $dayTime): self
    {
        $this->dayTime = $dayTime;

        return $this;
    }

    public function getDrugs(): ?bool
    {
        return $this->drugs;
    }

    public function setDrugs(bool $drugs): self
    {
        $this->drugs = $drugs;

        return $this;
    }
}
