<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use AppBundle\Entity\Leilao;

class PassagemRepository extends EntityRepository
{
    public function findBySituation($situation)
    {
        $qb = $this->createQueryBuilder('p')
            ->select('p')
            ->join('p.leilao', 'l');

        if ($situation == Leilao::ABERTO) {
            $qb->where("l.datainicio < :now")
                ->andWhere("l.situacao IS NULL")
                ->setParameter('now', new \DateTime('now'));
        } else if ($situation == Leilao::FECHADO) {
            $qb->where("l.situacao = :situation")
               ->setParameter('situation', $situation);
        } else if ($situation == Leilao::PROXIMOS) {
            $qb->where("l.datainicio > :now")
                ->andWhere("l.situacao IS NULL")
                ->setParameter('now', new \DateTime('now'));
        }

        $result = $qb->getQuery()
                     ->getResult();

        return $result;
    }
}