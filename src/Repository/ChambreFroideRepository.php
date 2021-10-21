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

    /**
     * @return ChambreFroide[] Returns an array of ChambreFroide Objects
     */
    public function lastTree()
    {
        return $this->createQueryBuilder('p')
            ->orderBy('p.id', 'DESC')
            ->setMaxResults(3)
            ->getQuery()
            ->getResult();
    }
}
