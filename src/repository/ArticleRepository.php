<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/Article.php';

class ArticleRepository extends Repository
{

    public function getProject(int $id): ?Article
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.articles WHERE id = :id
        ');
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $article = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($article == false) {
            return null;
        }

        return new Article(
            $article['title'],
            $article['description'],
            $article['image']
        );
    }

    public function addArticle(Article $article): void
    {
        $date = new DateTime();
        $stmt = $this->database->connect()->prepare('
            INSERT INTO articles (title, description, image, created_at, id_assigned_by)
            VALUES (?, ?, ?, ?, ?)
        ');

        //TODO you should get this value from logged user session
        $assignedById = 1;

        $stmt->execute([
            $article->getTitle(),
            $article->getDescription(),
            $article->getImage(),
            $date->format('Y-m-d'),
            $assignedById
        ]);
    }
}