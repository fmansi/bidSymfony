<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Leilao
 *
 * @ORM\Table(name="leilao")
 * @ORM\Entity
 */
class Leilao
{
    CONST FECHADO    = 'fechado';
    CONST PROXIMOS   = 'proximos';
    CONST ABERTO     = 'abertos';

    /**
     * @var integer
     *
     * @ORM\Column(name="idleilao", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataInicio", type="datetime", nullable=true)
     */
    private $datainicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tempoLeilao", type="datetime", nullable=true)
     */
    private $tempoleilao;

    /**
     * @var string
     *
     * @ORM\Column(name="situacao", type="string", length=45, nullable=true)
     */
    private $situacao;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $idleilao
     */
    public function setId($idleilao)
    {
        $this->id = $idleilao;
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
    public function getTempoleilao()
    {
        $data_inicial = (new \DateTime());
        $data_final = $this->tempoleilao;

        $diferenca = $data_inicial->diff($data_final);

        if (!$diferenca->invert) {
            return $diferenca->format('%H:%I:%S');
        } else {
            return null;
        }
    }

    /**
     * @param \DateTime $tempoleilao
     */
    public function setTempoleilao($tempoleilao)
    {
        $this->tempoleilao = $tempoleilao;
    }

    /**
     * @return string
     */
    public function getSituacao()
    {
        return $this->situacao;
    }

    /**
     * @param string $situacao
     */
    public function setSituacao($situacao)
    {
        $this->situacao = $situacao;
    }
}

