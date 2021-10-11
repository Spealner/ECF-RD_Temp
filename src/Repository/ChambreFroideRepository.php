<?php

namespace App\Repository;

use App\Entity\ChambreFroide;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ChambreFroide|null find($id, $lockMode = null, $lockVersion = null)
 * @method ChambreFroide|null findOneBy(array $criteria, array $orderBy = null)
 * @method ChambreFroide[]    findAll()
 * @method ChambreFroide[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ChambreFroideRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ChambreFroide::class);
    }

    // /**
    //  * @return ChambreFroide[] Returns an array of ChambreFroide objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ChambreFroide
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
