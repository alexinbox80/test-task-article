<?php

namespace App\Presentation\Http\App\Controller\Frontpage;

use App\Application\Service\ArticleService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ArticleController extends AbstractController
{
    #[Route('/article', name: 'app_articles')]
    public function index(
        ArticleService $articleService
    ): Response
    {
        $articles = $articleService->getArticles();

        return $this->render('app/article/page.html.twig', [
            'articles' => $articles,
        ]);
    }

    #[Route('/article', name: 'app_show_article', requirements: ['id' => '\d+'])]
    public function show(
        ArticleService $articleService,
        int            $id
    ): Response
    {
        $article = $articleService->getArticle($id);

        return $this->render('app/article/show.html.twig', [
            'article' => $article
        ]);
    }
}
