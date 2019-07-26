<?php

namespace App\Repository;

use App\Entity\Ile;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Ile|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ile|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ile[]    findAll()
 * @method Ile[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class IleRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Ile::class);
    }

    // /**
    //  * @return Ile[] Returns an array of Ile objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Ile
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
