<?php

namespace App\Repository;

use App\Entity\Definitions;
use App\Classe\Search;
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

    /**
     * Requête qui me permet de récuperer les produits en fonction de la recherche de l'utilisateur
     * @return Product[]
     */
    public function findWithSearch(Search $search)
    {
        $query = $this
            ->createQueryBuilder('p')
            ->select('c', 'p')
            ->join('p.subcategory', 'c');

        if (!empty($search->categories)) {
            $query = $query
                ->andWhere('c.id IN (:subcategories)')
                ->setParameter('subcategories', $search->categories);
        }

        if (!empty($search->string)) {
            $query = $query
                ->andWhere('p.name LIKE :string')
                ->setParameter('string', "%{$search->string}%");
        }

        return $query->getQuery()->getResult();
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
