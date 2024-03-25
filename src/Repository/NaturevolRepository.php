<?php

namespace App\Repository;

use App\Entity\Naturevol;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Naturevol>
 *
 * @method Naturevol|null find($id, $lockMode = null, $lockVersion = null)
 * @method Naturevol|null findOneBy(array $criteria, array $orderBy = null)
 * @method Naturevol[]    findAll()
 * @method Naturevol[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NaturevolRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Naturevol::class);
    }

    //    /**
    //     * @return Naturevol[] Returns an array of Naturevol objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('n')
    //            ->andWhere('n.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('n.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Naturevol
    //    {
    //        return $this->createQueryBuilder('n')
    //            ->andWhere('n.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
