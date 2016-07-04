<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HistoricoCredito
 *
 * @ORM\Table(name="historico_credito", indexes={@ORM\Index(name="fk_historico_credito_usuario1_idx", columns={"usuario"})})
 * @ORM\Entity
 */
class HistoricoCredito
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idhistorico_credito", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="controle_credito", type="integer", nullable=false)
     */
    private $controleCredito;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="datetime", nullable=true)
     */
    private $data;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=45, nullable=true)
     */
    private $descricao;

    /**
     * @var \Usuario
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usuario", referencedColumnName="idusuario")
     * })
     */
    private $usuario;

    /**
     * @return Usuario
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * @param \Usuario $usuario
     */
    public function setUsuario(Usuario $usuario)
    {
        $this->usuario = $usuario;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $idhistoricoCredito
     */
    public function setId($idhistoricoCredito)
    {
        $this->id = $idhistoricoCredito;
    }

    /**
     * @return int
     */
    public function getControleCredito()
    {
        return $this->controleCredito;
    }

    /**
     * @param int $controleCredito
     */
    public function setControleCredito($controleCredito)
    {
        $this->controleCredito = $controleCredito;
    }

    /**
     * @return \DateTime
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param \DateTime $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * @return string
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param string $descricao
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }
}

