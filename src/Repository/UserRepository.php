<?php

namespace App\Repository;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class UserRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, User::class);
    }
    
    /**
     * @param $username
     * @return User[]
     */

    
    public function findByUsername($username)
    {
        return $qb = $this->createQueryBuilder('u')
            ->where('u.username = :username')
            ->setParameter('username', $username)
            ->orderBy('u.username', 'ASC')
            ->getQuery();
            
        
        return $qb->execute();
    }
//    public function findAll($username): array
//{
//    $conn = $this->getEntityManager()->getConnection();
//
//    $sql = '
//        SELECT * FROM user u
//        ORDER BY u.username ASC
//        ';
//    $stmt = $conn->prepare($sql);
//    $stmt->execute();
//
//    // returns an array of arrays (i.e. a raw data set)
//    return $stmt->fetchAll();
//    
//}
}