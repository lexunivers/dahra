<?php

namespace App\Repository;

use App\Entity\Typevol;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Typevol>
 *
 * @method Typevol|null find($id, $lockMode = null, $lockVersion = null)
 * @method Typevol|null findOneBy(array $criteria, array $orderBy = null)
 * @method Typevol[]    findAll()
 * @method Typevol[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypevolRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Typevol::class);
    }

    //    /**
    //     * @return Typevol[] Returns an array of Typevol objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('t')
    //            ->andWhere('t.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('t.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Typevol
    //    {
    //        return $this->createQueryBuilder('t')
    //            ->andWhere('t.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
