<?php

namespace App\Repository;

use App\Entity\Citas;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Citas>
 *
 * @method Citas|null find($id, $lockMode = null, $lockVersion = null)
 * @method Citas|null findOneBy(array $criteria, array $orderBy = null)
 * @method Citas[]    findAll()
 * @method Citas[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CitasRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Citas::class);
    }

//    /**
//     * @return Citas[] Returns an array of Citas objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Citas
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
