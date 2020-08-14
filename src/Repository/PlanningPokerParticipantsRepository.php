<?php

namespace App\Repository;

use App\Entity\PlanningPokerParticipants;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PlanningPokerParticipants|null find($id, $lockMode = null, $lockVersion = null)
 * @method PlanningPokerParticipants|null findOneBy(array $criteria, array $orderBy = null)
 * @method PlanningPokerParticipants[]    findAll()
 * @method PlanningPokerParticipants[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PlanningPokerParticipantsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PlanningPokerParticipants::class);
    }

    // /**
    //  * @return PlanningPokerParticipants[] Returns an array of PlanningPokerParticipants objects
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
    public function findOneBySomeField($value): ?PlanningPokerParticipants
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
