<?php

namespace App\Entity;

use App\Repository\QuestionsTableRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=QuestionsTableRepository::class)
 */
class QuestionsTable
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
     * @ORM\Column(type="integer")
     */
    private $from_user;

    /**
     * @ORM\Column(type="integer")
     */
    private $expert;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $status;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

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

    public function getFromUser(): ?int
    {
        return $this->from_user;
    }

    public function setFromUser(int $from_user): self
    {
        $this->from_user = $from_user;

        return $this;
    }

    public function getExpert(): ?int
    {
        return $this->expert;
    }

    public function setExpert(int $expert): self
    {
        $this->expert = $expert;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(int $status): self
    {
        $this->status = $status;

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
}
