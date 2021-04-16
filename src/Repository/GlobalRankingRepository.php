<?php

namespace App\Repository;

use App\Entity\GlobalRanking;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method GlobalRanking|null find($id, $lockMode = null, $lockVersion = null)
 * @method GlobalRanking|null findOneBy(array $criteria, array $orderBy = null)
 * @method GlobalRanking[]    findAll()
 * @method GlobalRanking[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GlobalRankingRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GlobalRanking::class);
    }

    // /**
    //  * @return GlobalRanking[] Returns an array of GlobalRanking objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?GlobalRanking
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
