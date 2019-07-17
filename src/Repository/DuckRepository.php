<?php

namespace App\Repository;

use App\Entity\Duck;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;
use Symfony\Bridge\Doctrine\Security\User\UserLoaderInterface;

/**
 * @method Duck|null find($id, $lockMode = null, $lockVersion = null)
 * @method Duck|null findOneBy(array $criteria, array $orderBy = null)
 * @method Duck[]    findAll()
 * @method Duck[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DuckRepository extends ServiceEntityRepository implements UserLoaderInterface
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Duck::class);
    }

    public function loadUserByUsername($usernameOrEmail)
    {
        return $this->createQueryBuilder('input')
            ->where('input.duckname = :query OR input.email = :query')
            ->setParameter('query', $usernameOrEmail)
            ->getQuery()
            ->getOneOrNullResult();
    }


    // /**
    //  * @return Duck[] Returns an array of Duck objects
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
    public function findOneBySomeField($value): ?Duck
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
