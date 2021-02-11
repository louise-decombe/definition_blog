<?php

namespace App\Repository;

use App\Entity\Definitions;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Definitions|null find($id, $lockMode = null, $lockVersion = null)
 * @method Definitions|null findOneBy(array $criteria, array $orderBy = null)
 * @method Definitions[]    findAll()
 * @method Definitions[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DefinitionsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Definitions::class);
    }

    // /**
    //  * @return Definitions[] Returns an array of Definitions objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Definitions
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
