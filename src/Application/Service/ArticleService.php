<?php

declare(strict_types=1);

namespace App\Application\Service;

use App\Domain\Entity\Article\Article;
use Doctrine\ORM\EntityManagerInterface;

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
     * @return array
     */
    public function getArticles(): array
    {
        $articleRepository = $this->entityManager->getRepository(Article::class);
        $articles = $articleRepository->findBy([], ['id' =>'DESC']);

        $modArticle = [];
        foreach ($articles as $article) {
            $modArticle[] = $article->toArray();
        }

        return $modArticle;
    }

    /**
     * @param int $id
     * @return array
     */
    public function getArticle(int $id): array
    {
        $em = $this->entityManager;
        $articleRepository = $em->getRepository(Article::class);

        $article = $articleRepository->find($id);
        $article->setReadCount($article->getReadCount() + 1);

        $em->persist($article);
        $em->flush();

        return $article->toArray();
    }
}
