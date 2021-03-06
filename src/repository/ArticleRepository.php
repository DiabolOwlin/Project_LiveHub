<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/Article.php';

class ArticleRepository extends Repository
{

    public function get_article(int $id): ?Article
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

    public function add_article(Article $article): void
    {
        $date = new DateTime();
        $stmt = $this->database->connect()->prepare('
            INSERT INTO articles (title, image, description, created_at, id_assigned_by)
            VALUES (?, ?, ?, ?, ?)
        ');

        //TODO you should get this value from logged user session
        $assignedById = 7;

        $stmt->execute([
            $article->getTitle(),
            $article->getImage(),
            $article->getDescription(),
            $date->format('Y-m-d H:i'),
            $assignedById

        ]);
    }

    public function get_articles(): array
    {
        $result = [];

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM users u RIGHT JOIN articles a on u.id = a.id_assigned_by ORDER BY created_at DESC;  

        ');

        $stmt->execute();
        $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($articles as $article) {
            $result[] = new Article(

                $article['title'],
                $article['image'],
                $article['description'],
                $article['likes'],
                $article['dislikes'],
                $article['id'],
                $article['username'],
                $article['created_at']

            );
        }

        return $result;
    }

    public function getArticleByTitle(string $searchString)
    {
        $searchString = '%' . strtolower($searchString) . '%';

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM articles WHERE LOWER(title) LIKE :search OR LOWER(description) LIKE :search
        ');
        $stmt->bindParam(':search', $searchString, PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    
    public function like(int $id) {
        $stmt = $this->database->connect()->prepare('
            UPDATE articles SET likes = likes + 1 WHERE id = :id
         ');

        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    }

    public function dislike(int $id) {
        $stmt = $this->database->connect()->prepare('
            UPDATE articles SET dislikes = dislikes + 1 WHERE id = :id
         ');

        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    }
}