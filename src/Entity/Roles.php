<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Roles
 *
 * @ORM\Table(name="roles", indexes={@ORM\Index(name="movie_id", columns={"movie_id"}), @ORM\Index(name="actor_id", columns={"actor_id"})})
 * @ORM\Entity
 */
class Roles
{
    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=100, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $role;

    /**
     * @var \Actors
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Actors")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="actor_id", referencedColumnName="id")
     * })
     */
    private $actor;

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

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function getActor(): ?Actors
    {
        return $this->actor;
    }

    public function setActor(?Actors $actor): self
    {
        $this->actor = $actor;

        return $this;
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
