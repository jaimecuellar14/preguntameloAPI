<?php

namespace App\Repository;

use App\Entity\Experts;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Experts|null find($id, $lockMode = null, $lockVersion = null)
 * @method Experts|null findOneBy(array $criteria, array $orderBy = null)
 * @method Experts[]    findAll()
 * @method Experts[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ExpertsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Experts::class);
    }

    // /**
    //  * @return Experts[] Returns an array of Experts objects
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
    public function findOneBySomeField($value): ?Experts
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
