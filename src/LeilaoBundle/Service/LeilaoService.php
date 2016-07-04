<?php
/**
 * Created by PhpStorm.
 * User: dereck
 * Date: 09/06/16
 * Time: 22:18
 */

namespace LeilaoBundle\Service;
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
}