<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MoviesGenres
 *
 * @ORM\Table(name="movies_genres", indexes={@ORM\Index(name="movies_genres_movie_id", columns={"movie_id"})})
 * @ORM\Entity
 */
class MoviesGenres
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
     * @var \Movies
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Movies")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="movie_id", referencedColumnName="id")
     * })
     */
    private $movie;

    public function getGenre(): ?string
    {
        return $this->genre;
    }

    public function getMovie(): ?Movies
    {
        return $this->movie;
    }

    public function setMovie(?Movies $movie): self
    {
        $this->movie = $movie;

        return $this;
    }


}
