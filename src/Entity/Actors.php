<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Actors
 *
 * @ORM\Table(name="actors", indexes={@ORM\Index(name="actors_first_name", columns={"first_name"}), @ORM\Index(name="actors_last_name", columns={"last_name"})})
 * @ORM\Entity
 */
class Actors
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
     * @var string|null
     *
     * @ORM\Column(name="gender", type="string", length=1, nullable=true, options={"default"="NULL","fixed"=true})
     */
    private $gender = 'NULL';


}
