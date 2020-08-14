<?php

namespace App\Entity;

use App\Repository\PlanningPokerParticipantsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PlanningPokerParticipantsRepository::class)
 */
class PlanningPokerParticipants
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $session_id;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $name;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSessionId(): ?int
    {
        return $this->session_id;
    }

    public function setSessionId(?int $session_id): self
    {
        $this->session_id = $session_id;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }
}
