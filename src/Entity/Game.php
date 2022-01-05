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

    #[ORM\Column(type: 'string', length: 255)]
    private $question1;

    #[ORM\Column(type: 'string', length: 255)]
    private $question2;

    #[ORM\Column(type: 'string', length: 255)]
    private $question3;

    #[ORM\Column(type: 'string', length: 255)]
    private $question4;

    #[ORM\Column(type: 'string', length: 255)]
    private $question5;

    #[ORM\Column(type: 'string', length: 255)]
    private $question6;

    #[ORM\Column(type: 'string', length: 255)]
    private $question7;

    #[ORM\Column(type: 'string', length: 255)]
    private $question8;

    #[ORM\Column(type: 'string', length: 255)]
    private $question9;

    #[ORM\Column(type: 'string', length: 255)]
    private $question10;

    #[ORM\Column(type: 'float')]
    private $score;

    #[ORM\Column(type: 'string')]
    private $answer1;

    #[ORM\Column(type: 'string')]
    private $answer2;

    #[ORM\Column(type: 'string')]
    private $answer3;

    #[ORM\Column(type: 'string')]
    private $answer4;

    #[ORM\Column(type: 'string')]
    private $answer5;

    #[ORM\Column(type: 'string')]
    private $answer6;

    #[ORM\Column(type: 'string')]
    private $answer7;

    #[ORM\Column(type: 'string')]
    private $answer8;

    #[ORM\Column(type: 'string')]
    private $answer9;

    #[ORM\Column(type: 'string')]
    private $answer10;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuestion1(): ?string
    {
        return $this->question1;
    }

    public function setQuestion1(string $question1): self
    {
        $this->question1 = $question1;

        return $this;
    }

    public function getQuestion2(): ?string
    {
        return $this->question2;
    }

    public function setQuestion2(string $question2): self
    {
        $this->question2 = $question2;

        return $this;
    }

    public function getQuestion3(): ?string
    {
        return $this->question3;
    }

    public function setQuestion3(string $question3): self
    {
        $this->question3 = $question3;

        return $this;
    }

    public function getQuestion4(): ?string
    {
        return $this->question4;
    }

    public function setQuestion4(string $question4): self
    {
        $this->question4 = $question4;

        return $this;
    }

    public function getQuestion5(): ?string
    {
        return $this->question5;
    }

    public function setQuestion5(string $question5): self
    {
        $this->question5 = $question5;

        return $this;
    }

    public function getQuestion6(): ?string
    {
        return $this->question6;
    }

    public function setQuestion6(string $question6): self
    {
        $this->question6 = $question6;

        return $this;
    }

    public function getQuestion7(): ?string
    {
        return $this->question7;
    }

    public function setQuestion7(string $question7): self
    {
        $this->question7 = $question7;

        return $this;
    }

    public function getQuestion8(): ?string
    {
        return $this->question8;
    }

    public function setQuestion8(string $question8): self
    {
        $this->question8 = $question8;

        return $this;
    }

    public function getQuestion9(): ?string
    {
        return $this->question9;
    }

    public function setQuestion9(string $question9): self
    {
        $this->question9 = $question9;

        return $this;
    }

    public function getQuestion10(): ?string
    {
        return $this->question10;
    }

    public function setQuestion10(string $question10): self
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

    public function getAnswer1(): ?string
    {
        return $this->answer1;
    }

    public function setAnswer1(string $answer1): self
    {
        $this->answer1 = $answer1;

        return $this;
    }

    public function getAnswer2(): ?string
    {
        return $this->answer2;
    }

    public function setAnswer2(string $answer2): self
    {
        $this->answer2 = $answer2;

        return $this;
    }

    public function getAnswer3(): ?string
    {
        return $this->answer3;
    }

    public function setAnswer3(string $answer3): self
    {
        $this->answer3 = $answer3;

        return $this;
    }

    public function getAnswer4(): ?string
    {
        return $this->answer4;
    }

    public function setAnswer4(string $answer4): self
    {
        $this->answer4 = $answer4;

        return $this;
    }

    public function getAnswer5(): ?string
    {
        return $this->answer5;
    }

    public function setAnswer5(string $answer5): self
    {
        $this->answer5 = $answer5;

        return $this;
    }

    public function getAnswer6(): ?string
    {
        return $this->answer6;
    }

    public function setAnswer6(string $answer6): self
    {
        $this->answer6 = $answer6;

        return $this;
    }

    public function getAnswer7(): ?string
    {
        return $this->answer7;
    }

    public function setAnswer7(string $answer7): self
    {
        $this->answer7 = $answer7;

        return $this;
    }

    public function getAnswer8(): ?string
    {
        return $this->answer8;
    }

    public function setAnswer8(string $answer8): self
    {
        $this->anwser8 = $answer8;

        return $this;
    }

    public function getAnswer9(): ?string
    {
        return $this->answer9;
    }

    public function setAnswer9(string $answer9): self
    {
        $this->answer9 = $answer9;

        return $this;
    }

    public function getAnswer10(): ?string
    {
        return $this->answer10;
    }

    public function setAnswer10(string $answer10): self
    {
        $this->answer10 = $answer10;

        return $this;
    }
}
