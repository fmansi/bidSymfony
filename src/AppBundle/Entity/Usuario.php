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
}

