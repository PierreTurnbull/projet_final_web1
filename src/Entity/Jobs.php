<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\JobsRepository")
 */
class Jobs
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $title;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="integer")
     */
    private $available_seats;

    /**
     * @ORM\Column(type="string", length=32)
     */
    private $category;

    /**
     * @ORM\Column(type="integer")
     */
    private $salary;

    /**
     * @ORM\Column(type="string", length=3)
     */
    private $contract_type;

    /**
     * @ORM\Column(type="integer")
     */
    private $contract_duration;

    /**
     * @ORM\Column(type="string", length=32)
     */
    private $rank;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $rank_description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prerequisite_temper;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prerequisite_age;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prerequisite_education;

    /**
     * @ORM\Column(type="integer")
     */
    private $caracteristics_action;

    /**
     * @ORM\Column(type="integer")
     */
    private $caracteristics_leadership;

    /**
     * @ORM\Column(type="integer")
     */
    private $caracteristics_analytic;

    /**
     * @ORM\Column(type="integer")
     */
    private $caracteristics_technophile;

    public function getId()
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getAvailableSeats(): ?int
    {
        return $this->available_seats;
    }

    public function setAvailableSeats(int $available_seats): self
    {
        $this->available_seats = $available_seats;

        return $this;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(string $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getSalary(): ?int
    {
        return $this->salary;
    }

    public function setSalary(int $salary): self
    {
        $this->salary = $salary;

        return $this;
    }

    public function getContractType(): ?string
    {
        return $this->contract_type;
    }

    public function setContractType(string $contract_type): self
    {
        $this->contract_type = $contract_type;

        return $this;
    }

    public function getContractDuration(): ?int
    {
        return $this->contract_duration;
    }

    public function setContractDuration(int $contract_duration): self
    {
        $this->contract_duration = $contract_duration;

        return $this;
    }

    public function getRank(): ?string
    {
        return $this->rank;
    }

    public function setRank(string $rank): self
    {
        $this->rank = $rank;

        return $this;
    }

    public function getRankDescription(): ?string
    {
        return $this->rank_description;
    }

    public function setRankDescription(string $rank_description): self
    {
        $this->rank_description = $rank_description;

        return $this;
    }

    public function getPrerequisiteTemper(): ?string
    {
        return $this->prerequisite_temper;
    }

    public function setPrerequisiteTemper(string $prerequisite_temper): self
    {
        $this->prerequisite_temper = $prerequisite_temper;

        return $this;
    }

    public function getPrerequisiteAge(): ?string
    {
        return $this->prerequisite_age;
    }

    public function setPrerequisiteAge(string $prerequisite_age): self
    {
        $this->prerequisite_age = $prerequisite_age;

        return $this;
    }

    public function getPrerequisiteEducation(): ?string
    {
        return $this->prerequisite_education;
    }

    public function setPrerequisiteEducation(string $prerequisite_education): self
    {
        $this->prerequisite_education = $prerequisite_education;

        return $this;
    }

    public function getCaracteristicsAction(): ?int
    {
        return $this->caracteristics_action;
    }

    public function setCaracteristicsAction(int $caracteristics_action): self
    {
        $this->caracteristics_action = $caracteristics_action;

        return $this;
    }

    public function getCaracteristicsLeadership(): ?int
    {
        return $this->caracteristics_leadership;
    }

    public function setCaracteristicsLeadership(int $caracteristics_leadership): self
    {
        $this->caracteristics_leadership = $caracteristics_leadership;

        return $this;
    }

    public function getCaracteristicsAnalytic(): ?int
    {
        return $this->caracteristics_analytic;
    }

    public function setCaracteristicsAnalytic(int $caracteristics_analytic): self
    {
        $this->caracteristics_analytic = $caracteristics_analytic;

        return $this;
    }

    public function getCaracteristicsTechnophile(): ?int
    {
        return $this->caracteristics_technophile;
    }

    public function setCaracteristicsTechnophile(int $caracteristics_technophile): self
    {
        $this->caracteristics_technophile = $caracteristics_technophile;

        return $this;
    }
}
