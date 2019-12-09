<?php

namespace App\Repository;

use App\Entity\CheezeListing;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method CheezeListing|null find($id, $lockMode = null, $lockVersion = null)
 * @method CheezeListing|null findOneBy(array $criteria, array $orderBy = null)
 * @method CheezeListing[]    findAll()
 * @method CheezeListing[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CheezeListingRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CheezeListing::class);
    }

    // /**
    //  * @return CheezeListing[] Returns an array of CheezeListing objects
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
    public function findOneBySomeField($value): ?CheezeListing
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
