<?php



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
    private $idLance;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="datetime", nullable=true)
     */
    private $data = 'CURRENT_TIMESTAMP';

    /**
     * @var \Leilao
     *
     * @ORM\ManyToOne(targetEntity="Leilao")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="leilao_id", referencedColumnName="idleilao")
     * })
     */
    private $leilao;

    /**
     * @var \Usuario
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usuario_id", referencedColumnName="idusuario")
     * })
     */
    private $usuario;


}

