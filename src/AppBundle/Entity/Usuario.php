<?php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 *
 * @ORM\Table(name="usuario")
 * @ORM\Entity
 */
class Usuario Extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idusuario", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @var \UsuarioDadosCadastro
     *
     * @ORM\ManyToOne(targetEntity="UsuarioDadosCadastro")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dados_cadastro", referencedColumnName="iddados_cadastro")
     * })
     */
    private $dadosCadastro;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=255, nullable=true)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="sobrenome", type="string", length=255, nullable=true)
     */
    private $sobrenome;

    /**
     * @var string
     *
     * @ORM\Column(name="apelido", type="string", length=255, nullable=true)
     */
    private $apelido;

    /**
     * @var string
     *
     * @ORM\Column(name="sexo", type="string", length=255, nullable=true)
     */
    private $sexo;

    /**
     * @var integer
     *
     * @ORM\Column(name="saldoLances", type="integer", nullable=true)
     */
    protected $saldoLances;

    /**
     * @return UsuarioDadosCadastro
     */
    public function getDadosCadastro()
    {
        return $this->dadosCadastro;
    }

    /**
     * @param \UsuarioDadosCadastro $dadosCadastro
     */
    public function setDadosCadastro(UsuarioDadosCadastro $dadosCadastro)
    {
        $this->dadosCadastro = $dadosCadastro;
    }

    /**
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param string $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return string
     */
    public function getSobrenome()
    {
        return $this->sobrenome;
    }

    /**
     * @param string $sobrenome
     */
    public function setSobrenome($sobrenome)
    {
        $this->sobrenome = $sobrenome;
    }

    /**
     * @return string
     */
    public function getApelido()
    {
        return $this->apelido;
    }

    /**
     * @param string $apelido
     */
    public function setApelido($apelido)
    {
        $this->apelido = $apelido;
    }

    /**
     * @return string
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * @param string $sexo
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

    /**
     * @return int
     */
    public function getSaldoLances()
    {
        return $this->saldoLances;
    }

    /**
     * @param int $saldoLances
     */
    public function setSaldoLances($saldoLances)
    {
        $this->saldoLances = $saldoLances;
    }
}

