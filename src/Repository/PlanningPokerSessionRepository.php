<?php

namespace App\Repository;

use App\Entity\PlanningPokerSession;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PlanningPokerSession|null find($id, $lockMode = null, $lockVersion = null)
 * @method PlanningPokerSession|null findOneBy(array $criteria, array $orderBy = null)
 * @method PlanningPokerSession[]    findAll()
 * @method PlanningPokerSession[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PlanningPokerSessionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PlanningPokerSession::class);
    }

    // /**
    //  * @return PlanningPokerSession[] Returns an array of PlanningPokerSession objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PlanningPokerSession
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
