<?php

namespace App\Entity;

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
     * @ORM\Column(name="name", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $name = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="year", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $year = NULL;

    /**
     * @var float|null
     *
     * @ORM\Column(name="rank", type="float", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $rank = NULL;

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

}
