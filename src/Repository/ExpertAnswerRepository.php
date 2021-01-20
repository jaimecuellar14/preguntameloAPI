<?php

namespace App\Repository;

use App\Entity\ExpertAnswer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ExpertAnswer|null find($id, $lockMode = null, $lockVersion = null)
 * @method ExpertAnswer|null findOneBy(array $criteria, array $orderBy = null)
 * @method ExpertAnswer[]    findAll()
 * @method ExpertAnswer[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ExpertAnswerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ExpertAnswer::class);
    }

    // /**
    //  * @return ExpertAnswer[] Returns an array of ExpertAnswer objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ExpertAnswer
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
