<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Directors
 *
 * @ORM\Table(name="directors", indexes={@ORM\Index(name="directors_first_name", columns={"first_name"}), @ORM\Index(name="directors_last_name", columns={"last_name"})})
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
     * @ORM\Column(name="first_name", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $firstName = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="last_name", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $lastName = 'NULL';

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

}
