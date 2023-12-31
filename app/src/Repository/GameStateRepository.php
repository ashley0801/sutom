<?php

namespace App\Repository;

use App\Entity\GameState;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<GameState>
 *
 * @method GameState|null find($id, $lockMode = null, $lockVersion = null)
 * @method GameState|null findOneBy(array $criteria, array $orderBy = null)
 * @method GameState[]    findAll()
 * @method GameState[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GameStateRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GameState::class);
    }

//    /**
//     * @return GameState[] Returns an array of GameState objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('g.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?GameState
//    {
//        return $this->createQueryBuilder('g')
//            ->andWhere('g.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
