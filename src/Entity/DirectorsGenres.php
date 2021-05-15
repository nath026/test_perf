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
     * @ORM\Column(name="prob", type="float", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $prob = NULL;

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


}
