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
     * @var int
     *
     * @ORM\Column(name="actor_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $actorId;

    /**
     * @var int
     *
     * @ORM\Column(name="movie_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $movieId;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=100, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $role;

    public function getActorId(): ?int
    {
        return $this->actorId;
    }

    public function getMovieId(): ?int
    {
        return $this->movieId;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }


}
