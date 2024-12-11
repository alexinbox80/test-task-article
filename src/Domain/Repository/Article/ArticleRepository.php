<?php

namespace App\Repository\Article;

use App\Domain\Entity\Article\Article;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Article>
 */
class ArticleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Article::class);
    }

    /**
     * @param int $page
     * @param int $perPage
     * @return Article[]
     */
//    public function getArticles(int $page, int $perPage): array
//    {
//        $qb = $this->getEntityManager()->createQueryBuilder();
//        $qb->select('a')
//            ->from($this->getClassName(), 'a')
//            ->orderBy('a.id', 'DESC')
//            ->setFirstResult($perPage * $page)
//            ->setMaxResults($perPage);
//
//        return $qb->getQuery()->getResult();
//    }
}
