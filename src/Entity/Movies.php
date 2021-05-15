<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Movies
 *
 * @ORM\Table(name="movies", indexes={@ORM\Index(name="movies_name", columns={"name"})})
 * @ORM\Entity
 */
class Movies
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=true)
     */
    private $name;

    /**
     * @var int|null
     *
     * @ORM\Column(name="year", type="integer", nullable=true)
     */
    private $year;

    /**
     * @var float|null
     *
     * @ORM\Column(name="rank", type="float", precision=10, scale=0, nullable=true)
     */
    private $rank;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Directors", mappedBy="movie")
     */
    private $director;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->director = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getYear(): ?int
    {
        return $this->year;
    }

    public function setYear(?int $year): self
    {
        $this->year = $year;

        return $this;
    }

    public function getRank(): ?float
    {
        return $this->rank;
    }

    public function setRank(?float $rank): self
    {
        $this->rank = $rank;

        return $this;
    }

    /**
     * @return Collection|Directors[]
     */
    public function getDirector(): Collection
    {
        return $this->director;
    }

    public function addDirector(Directors $director): self
    {
        if (!$this->director->contains($director)) {
            $this->director[] = $director;
            $director->addMovie($this);
        }

        return $this;
    }

    public function removeDirector(Directors $director): self
    {
        if ($this->director->removeElement($director)) {
            $director->removeMovie($this);
        }

        return $this;
    }

}
