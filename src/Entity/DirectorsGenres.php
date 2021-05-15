<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DirectorsGenres
 *
 * @ORM\Table(name="directors_genres", indexes={@ORM\Index(name="directors_genres_director_id", columns={"director_id"})})
 * @ORM\Entity
 */
class DirectorsGenres
{
    /**
     * @var string
     *
     * @ORM\Column(name="genre", type="string", length=100, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $genre;

    /**
     * @var float|null
     *
     * @ORM\Column(name="prob", type="float", precision=10, scale=0, nullable=true)
     */
    private $prob;

    /**
     * @var \Directors
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Directors")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="director_id", referencedColumnName="id")
     * })
     */
    private $director;

    public function getGenre(): ?string
    {
        return $this->genre;
    }

    public function getProb(): ?float
    {
        return $this->prob;
    }

    public function setProb(?float $prob): self
    {
        $this->prob = $prob;

        return $this;
    }

    public function getDirector(): ?Directors
    {
        return $this->director;
    }

    public function setDirector(?Directors $director): self
    {
        $this->director = $director;

        return $this;
    }


}
