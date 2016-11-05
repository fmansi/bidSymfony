<?php
/**
 * Created by PhpStorm.
 * User: dereck
 * Date: 09/06/16
 * Time: 22:18
 */

namespace LeilaoBundle\Service;
use AppBundle\Entity\LeilaoLances;
use AppBundle\Entity\Usuario;
use Doctrine\ORM\EntityManager;

class LeilaoService
{
    /**
     * Doctrine Entity Manager
     *
     * @var Doctrine\ORM\EntityManager
     */
    private $em;
    /**
     * Construtor Service Container
     */
    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function getList($situation)
    {
        $passagens = $this->em->getRepository("AppBundle:Passagem")->findBySituation($situation);

        return $passagens;
    }

    public function darLance($leilaoId, Usuario $usuario)
    {
        $leilaoRepository = $this->em->getRepository('AppBundle:Leilao');
        $leilao = $leilaoRepository->find($leilaoId);
        $saldo = $usuario->getSaldoLances();
        $data_inicial = (new \DateTime());

        if (!$leilao) {
            throw new \Exception("Leilão não encontrado");
        }

        $leilao->setUsuario($usuario);
        $usuario->setSaldoLances($saldo - 1);
        //Cria lance
        $leilaoLance = new LeilaoLances();
        $leilaoLance->setLeilao($leilao);
        $leilaoLance->setUsuario($usuario);

        $this->em->persist($leilaoLance);
        $this->em->persist($usuario);
        $this->em->persist($leilao);

        $this->em->flush();
    }
}
