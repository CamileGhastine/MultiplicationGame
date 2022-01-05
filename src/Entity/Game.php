<?php

namespace App\Entity;

use App\Repository\GameRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GameRepository::class)]
class Game
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'array')]
    private $question1;

    #[ORM\Column(type: 'array')]
    private $question2;

    #[ORM\Column(type: 'array')]
    private $question3;

    #[ORM\Column(type: 'array')]
    private $question4;

    #[ORM\Column(type: 'array')]
    private $question5;

    #[ORM\Column(type: 'array')]
    private $question6;

    #[ORM\Column(type: 'array')]
    private $question7;

    #[ORM\Column(type: 'array')]
    private $question8;

    #[ORM\Column(type: 'array')]
    private $question9;

    #[ORM\Column(type: 'array')]
    private $question10;

    #[ORM\Column(type: 'float')]
    private $score;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $answer1;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $answer2;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $answer3;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $answer4;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $answer5;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $answer6;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $answer7;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $answer8;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $answer9;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $answer10;

    #[ORM\Column(type: 'integer')]
    private $timeStart;

    #[ORM\Column(type: 'integer')]
    private $timeEnd;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuestion1(): ?array
    {
        return $this->question1;
    }

    public function setQuestion1(array $question1): self
    {
        $this->question1 = $question1;

        return $this;
    }

    public function getQuestion2(): ?array
    {
        return $this->question2;
    }

    public function setQuestion2(array $question2): self
    {
        $this->question2 = $question2;

        return $this;
    }

    public function getQuestion3(): ?array
    {
        return $this->question3;
    }

    public function setQuestion3(array $question3): self
    {
        $this->question3 = $question3;

        return $this;
    }

    public function getQuestion4(): ?array
    {
        return $this->question4;
    }

    public function setQuestion4(array $question4): self
    {
        $this->question4 = $question4;

        return $this;
    }

    public function getQuestion5(): ?array
    {
        return $this->question5;
    }

    public function setQuestion5(array $question5): self
    {
        $this->question5 = $question5;

        return $this;
    }

    public function getQuestion6(): ?array
    {
        return $this->question6;
    }

    public function setQuestion6(array $question6): self
    {
        $this->question6 = $question6;

        return $this;
    }

    public function getQuestion7(): ?array
    {
        return $this->question7;
    }

    public function setQuestion7(array $question7): self
    {
        $this->question7 = $question7;

        return $this;
    }

    public function getQuestion8(): ?array
    {
        return $this->question8;
    }

    public function setQuestion8(array $question8): self
    {
        $this->question8 = $question8;

        return $this;
    }

    public function getQuestion9(): ?array
    {
        return $this->question9;
    }

    public function setQuestion9(array $question9): self
    {
        $this->question9 = $question9;

        return $this;
    }

    public function getQuestion10(): ?array
    {
        return $this->question10;
    }

    public function setQuestion10(array $question10): self
    {
        $this->question10 = $question10;

        return $this;
    }

    public function getScore(): ?float
    {
        return $this->score;
    }

    public function setScore(float $score): self
    {
        $this->score = $score;

        return $this;
    }

    public function getAnswer1(): ?int
    {
        return $this->answer1;
    }

    public function setAnswer1(int $answer1): self
    {
        $this->answer1 = $answer1;

        return $this;
    }

    public function getAnswer2(): ?int
    {
        return $this->answer2;
    }

    public function setAnswer2(int $answer2): self
    {
        $this->answer2 = $answer2;

        return $this;
    }

    public function getAnswer3(): ?int
    {
        return $this->answer3;
    }

    public function setAnswer3(int $answer3): self
    {
        $this->answer3 = $answer3;

        return $this;
    }

    public function getAnswer4(): ?int
    {
        return $this->answer4;
    }

    public function setAnswer4(int $answer4): self
    {
        $this->answer4 = $answer4;

        return $this;
    }

    public function getAnswer5(): ?int
    {
        return $this->answer5;
    }

    public function setAnswer5(int $answer5): self
    {
        $this->answer5 = $answer5;

        return $this;
    }

    public function getAnswer6(): ?int
    {
        return $this->answer6;
    }

    public function setAnswer6(int $answer6): self
    {
        $this->answer6 = $answer6;

        return $this;
    }

    public function getAnswer7(): ?int
    {
        return $this->answer7;
    }

    public function setAnswer7(int $answer7): self
    {
        $this->answer7 = $answer7;

        return $this;
    }

    public function getAnswer8(): ?int
    {
        return $this->answer8;
    }

    public function setAnswer8(int $answer8): self
    {
        $this->answer8 = $answer8;

        return $this;
    }

    public function getAnswer9(): ?int
    {
        return $this->answer9;
    }

    public function setAnswer9(int $answer9): self
    {
        $this->answer9 = $answer9;

        return $this;
    }

    public function getAnswer10(): ?int
    {
        return $this->answer10;
    }

    public function setAnswer10(int $answer10): self
    {
        $this->answer10 = $answer10;

        return $this;
    }

    public function getTimeStart(): ?int
    {
        return $this->timeStart;
    }

    public function setTimeStart(int $timeStart): self
    {
        $this->timeStart = $timeStart;

        return $this;
    }

    public function getTimeEnd(): ?int
    {
        return $this->timeEnd;
    }

    public function setTimeEnd(int $timeEnd): self
    {
        $this->timeEnd = $timeEnd;

        return $this;
    }

}
