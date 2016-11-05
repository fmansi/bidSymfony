<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LeilaoLances
 *
 * @ORM\Table(name="leilao_lances", indexes={@ORM\Index(name="index2", columns={"usuario_id"}), @ORM\Index(name="leilao_idx", columns={"leilao_id"})})
 * @ORM\Entity
 */
class LeilaoLances
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_lance", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    public $idLance;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="datetime", nullable=true)
     */
    protected $data = 'CURRENT_TIMESTAMP';

    /**
     * @var \Leilao
     *
     * @ORM\ManyToOne(targetEntity="Leilao")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="leilao_id", referencedColumnName="idleilao")
     * })
     */
    protected $leilao;

    /**
     * @var \Usuario
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usuario_id", referencedColumnName="idusuario")
     * })
     */
    protected $usuario;

    public function __construct()
    {
        $this->data = new \DateTime();
    }


    /**
     * @return int
     */
    public function getId()
    {
        return $this->idLance;
    }

    /**
     * @param int $idLance
     */
    public function setId($idLance)
    {
        $this->idLance = $idLance;
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
     * @return \Leilao
     */
    public function getLeilao()
    {
        return $this->leilao;
    }

    /**
     * @param \Leilao $leilao
     */
    public function setLeilao($leilao)
    {
        $this->leilao = $leilao;
    }

    /**
     * @return \Usuario
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * @param \Usuario $usuario
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }
}

