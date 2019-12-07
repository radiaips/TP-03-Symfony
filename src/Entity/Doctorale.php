<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DoctoraleRepository")
 */
class Doctorale
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nom;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\these", mappedBy="doctorale")
     */
    private $theses;

    public function __construct()
    {
        $this->theses = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * @return Collection|these[]
     */
    public function getTheses(): Collection
    {
        return $this->theses;
    }

    public function addThesis(these $thesis): self
    {
        if (!$this->theses->contains($thesis)) {
            $this->theses[] = $thesis;
            $thesis->setDoctorale($this);
        }

        return $this;
    }

    public function removeThesis(these $thesis): self
    {
        if ($this->theses->contains($thesis)) {
            $this->theses->removeElement($thesis);
            // set the owning side to null (unless already changed)
            if ($thesis->getDoctorale() === $this) {
                $thesis->setDoctorale(null);
            }
        }

        return $this;
    }
}
