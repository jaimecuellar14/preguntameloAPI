<?php

namespace App\Repository;

use App\Entity\QuestionsTable;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method QuestionsTable|null find($id, $lockMode = null, $lockVersion = null)
 * @method QuestionsTable|null findOneBy(array $criteria, array $orderBy = null)
 * @method QuestionsTable[]    findAll()
 * @method QuestionsTable[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class QuestionsTableRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, QuestionsTable::class);
    }

    // /**
    //  * @return QuestionsTable[] Returns an array of QuestionsTable objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('q.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?QuestionsTable
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
