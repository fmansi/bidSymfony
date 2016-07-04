<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Promocoes
 *
 * @ORM\Table(name="promocoes", indexes={@ORM\Index(name="fk_promocoes_passagem1_idx", columns={"passagem"})})
 * @ORM\Entity
 */
class Promocoes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idpromocoes", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titulo", type="string", length=45, nullable=true)
     */
    private $titulo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataInicio", type="datetime", nullable=true)
     */
    private $datainicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataFinal", type="datetime", nullable=true)
     */
    private $datafinal;

    /**
     * @var \Passagem
     *
     * @ORM\ManyToOne(targetEntity="Passagem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="passagem", referencedColumnName="idpassagem")
     * })
     */
    private $passagem;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $idpromocoes
     */
    public function setId($idpromocoes)
    {
        $this->id = $idpromocoes;
    }

    /**
     * @return string
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * @param string $titulo
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    /**
     * @return \DateTime
     */
    public function getDatainicio()
    {
        return $this->datainicio;
    }

    /**
     * @param \DateTime $datainicio
     */
    public function setDatainicio($datainicio)
    {
        $this->datainicio = $datainicio;
    }

    /**
     * @return \DateTime
     */
    public function getDatafinal()
    {
        return $this->datafinal;
    }

    /**
     * @param \DateTime $datafinal
     */
    public function setDatafinal($datafinal)
    {
        $this->datafinal = $datafinal;
    }

    /**
     * @return \Passagem
     */
    public function getPassagem()
    {
        return $this->passagem;
    }

    /**
     * @param \Passagem $passagem
     */
    public function setPassagem($passagem)
    {
        $this->passagem = $passagem;
    }
}

