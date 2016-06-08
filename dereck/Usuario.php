<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 *
 * @ORM\Table(name="usuario", indexes={@ORM\Index(name="fk_usuario_dados_cadastro1_idx", columns={"dados_cadastro"})})
 * @ORM\Entity
 */
class Usuario
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idusuario", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idusuario;

    /**
     * @var \UsuarioDadosCadastro
     *
     * @ORM\ManyToOne(targetEntity="UsuarioDadosCadastro")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dados_cadastro", referencedColumnName="iddados_cadastro")
     * })
     */
    private $dadosCadastro;


}

