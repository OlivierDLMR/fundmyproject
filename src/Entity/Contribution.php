<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ContributionRepository")
 */
class Contribution
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=0)
     */
    private $amout;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Project", inversedBy="contributions")
     */
    private $projet;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="contributions")
     */
    private $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAmout(): ?string
    {
        return $this->amout;
    }

    public function setAmout(string $amout): self
    {
        $this->amout = $amout;

        return $this;
    }

    public function getProjet(): ?Project
    {
        return $this->projet;
    }

    public function setProjet(?Project $projet): self
    {
        $this->projet = $projet;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function __toString()
    {
        return $this->getAmout();
    }


}
