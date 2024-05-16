<?php

namespace App\Entity;

use App\Repository\CitasRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CitasRepository::class)]
class Citas
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $medico = null;

    #[ORM\Column(length: 255)]
    private ?string $paciente = null;

    #[ORM\Column(nullable: true)]
    private ?int $identificacion = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $fecha = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMedico(): ?string
    {
        return $this->medico;
    }

    public function setMedico(string $medico): static
    {
        $this->medico = $medico;

        return $this;
    }

    public function getPaciente(): ?string
    {
        return $this->paciente;
    }

    public function setPaciente(string $paciente): static
    {
        $this->paciente = $paciente;

        return $this;
    }

    public function getIdentificacion(): ?int
    {
        return $this->identificacion;
    }

    public function setIdentificacion(?int $identificacion): static
    {
        $this->identificacion = $identificacion;

        return $this;
    }

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->fecha;
    }

    public function setFecha(\DateTimeInterface $fecha): static
    {
        $this->fecha = $fecha;

        return $this;
    }
}
