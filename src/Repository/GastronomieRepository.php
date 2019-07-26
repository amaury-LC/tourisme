<?php

namespace App\Repository;

use App\Entity\Gastronomie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Gastronomie|null find($id, $lockMode = null, $lockVersion = null)
 * @method Gastronomie|null findOneBy(array $criteria, array $orderBy = null)
 * @method Gastronomie[]    findAll()
 * @method Gastronomie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GastronomieRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Gastronomie::class);
    }

    // /**
    //  * @return Gastronomie[] Returns an array of Gastronomie objects
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
    public function findOneBySomeField($value): ?Gastronomie
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
