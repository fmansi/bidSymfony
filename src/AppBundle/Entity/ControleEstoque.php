<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ControleEstoque
 *
 * @ORM\Table(name="controle_estoque", indexes={@ORM\Index(name="fk_controle_estoque_passagem1_idx", columns={"passagem"})})
 * @ORM\Entity
 */
class ControleEstoque
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idcontrole_estoque", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantidade", type="integer", nullable=true)
     */
    private $quantidade;

    /**
     * @var string
     *
     * @ORM\Column(name="ativo", type="string", length=45, nullable=false)
     */
    private $ativo;

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
     * @param int $idcontroleEstoque
     */
    public function setId($idcontroleEstoque)
    {
        $this->id = $idcontroleEstoque;
    }

    /**
     * @return int
     */
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    /**
     * @param int $quantidade
     */
    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;
    }

    /**
     * @return string
     */
    public function getAtivo()
    {
        return $this->ativo;
    }

    /**
     * @param string $ativo
     */
    public function setAtivo($ativo)
    {
        $this->ativo = $ativo;
    }

    /**
     * @return Passagem
     */
    public function getPassagem()
    {
        return $this->passagem;
    }

    /**
     * @param Passagem $passagem
     */
    public function setPassagem(Passagem $passagem)
    {
        $this->passagem = $passagem;
    }
}

