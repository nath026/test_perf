<?php

namespace App\Entity;

use App\Repository\GlobalRankingRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=GlobalRankingRepository::class)
 */
class GlobalRanking
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $rank;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $prev_rank;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $league;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=0, nullable=true)
     */
    private $off;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=0, nullable=true)
     */
    private $def;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=0, nullable=true)
     */
    private $spi;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRank(): ?int
    {
        return $this->rank;
    }

    public function setRank(?int $rank): self
    {
        $this->rank = $rank;

        return $this;
    }

    public function getPrevRank(): ?int
    {
        return $this->prev_rank;
    }

    public function setPrevRank(?int $prev_rank): self
    {
        $this->prev_rank = $prev_rank;

        return $this;
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

    public function getLeague(): ?string
    {
        return $this->league;
    }

    public function setLeague(?string $league): self
    {
        $this->league = $league;

        return $this;
    }

    public function getOff(): ?string
    {
        return $this->off;
    }

    public function setOff(?string $off): self
    {
        $this->off = $off;

        return $this;
    }

    public function getDef(): ?string
    {
        return $this->def;
    }

    public function setDef(?string $def): self
    {
        $this->def = $def;

        return $this;
    }

    public function getSpi(): ?string
    {
        return $this->spi;
    }

    public function setSpi(?string $spi): self
    {
        $this->spi = $spi;

        return $this;
    }
}
