<?php

namespace App\Entity;

use App\Repository\QuestionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=QuestionRepository::class)
 */
class Question
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
    private $question;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $question_body;

    /**
     * @ORM\ManyToOne(targetEntity=Users::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $from_user;

    /**
     * @ORM\ManyToOne(targetEntity=Experts::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $expert;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @ORM\OneToOne(targetEntity=Status::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $status;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuestion(): ?string
    {
        return $this->question;
    }

    public function setQuestion(string $question): self
    {
        $this->question = $question;

        return $this;
    }

    public function getQuestionBody(): ?string
    {
        return $this->question_body;
    }

    public function setQuestionBody(string $question_body): self
    {
        $this->question_body = $question_body;

        return $this;
    }

    public function getFromUser(): ?Users
    {
        return $this->from_user;
    }

    public function setFromUser(?Users $from_user): self
    {
        $this->from_user = $from_user;

        return $this;
    }

    public function getExpert(): ?Experts
    {
        return $this->expert;
    }

    public function setExpert(?Experts $expert): self
    {
        $this->expert = $expert;

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

    public function getStatus(): ?Status
    {
        return $this->status;
    }

    public function setStatus(Status $status): self
    {
        $this->status = $status;

        return $this;
    }
}
