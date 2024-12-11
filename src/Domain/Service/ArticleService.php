<?php

declare(strict_types=1);

namespace App\Domain\Service;

use App\Repository\Article\ArticleRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Domain\Entity\Article\Article;

class ArticleService
{
    /**
     * @var EntityManagerInterface
     */
    private EntityManagerInterface $entityManager;

    public function __construct(
        EntityManagerInterface $entityManager,
    )
    {
        $this->entityManager = $entityManager;
    }


    /**
     * @param ?int | null $page
     * @param int $perPage
     * @return array
     */
    public function getArticles(int | null $page, int $perPage): array
    {
        /**
         * @var ArticleRepository $articleRepository
         */
        $articleRepository = $this->entityManager->getRepository(Article::class);
//
//        $articles[] = [];
//        if ($page === null) {
//            $articles = $articleRepository->findBy([], ['id' =>'DESC']);
//        } else {
//            if ($page < 0)
//                return [];
//
//            $articles = $articleRepository->getBooks($page, $perPage);
//        }

        dd($page);

        return $articles;
    }
}
