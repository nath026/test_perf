<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Directors
 *
 * @ORM\Table(name="directors", indexes={@ORM\Index(name="directors_last_name", columns={"last_name"}), @ORM\Index(name="directors_first_name", columns={"first_name"})})
 * @ORM\Entity
 */
class Directors
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
     * @ORM\Column(name="first_name", type="string", length=100, nullable=true)
     */
    private $firstName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="last_name", type="string", length=100, nullable=true)
     */
    private $lastName;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Movies", inversedBy="director")
     * @ORM\JoinTable(name="movies_directors",
     *   joinColumns={
     *     @ORM\JoinColumn(name="director_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="movie_id", referencedColumnName="id")
     *   }
     * )
     */
    private $movie;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->movie = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(?string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(?string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * @return Collection|Movies[]
     */
    public function getMovie(): Collection
    {
        return $this->movie;
    }

    public function addMovie(Movies $movie): self
    {
        if (!$this->movie->contains($movie)) {
            $this->movie[] = $movie;
        }

        return $this;
    }

    public function removeMovie(Movies $movie): self
    {
        $this->movie->removeElement($movie);

        return $this;
    }

}
