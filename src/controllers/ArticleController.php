<?php

require_once 'AppController.php';
require_once __DIR__ .'/../models/Article.php';
require_once __DIR__.'/../repository/ArticleRepository.php';

class ArticleController extends AppController {

    const MAX_FILE_SIZE = 1024*1024;
    const SUPPORTED_TYPES = ['image/png', 'image/jpeg'];
    const UPLOAD_DIRECTORY = '/../public/uploads/';

    private $message = [];
    private $articleRepository;

    public function __construct()
    {
        parent::__construct();
        $this->articleRepository = new ArticleRepository();
    }

    public function main_page()
    {
        $articles = $this->articleRepository->get_articles();
        $this->render('main_page', ['articles' => $articles]);
    }

    public function add_article()
    {
        if ($this->isPost() && is_uploaded_file($_FILES['file']['tmp_name']) && $this->validate($_FILES['file'])) {
            move_uploaded_file(
                $_FILES['file']['tmp_name'],
                dirname(__DIR__).self::UPLOAD_DIRECTORY.$_FILES['file']['name']
            );

            // TODO create new project object and save it in database
            $article = new Article($_POST['title'], $_FILES['file']['name'], $_POST['description']);
            $this->articleRepository->add_article($article);

            $url = "http://$_SERVER[HTTP_HOST]";
            header("Location: {$url}/main_page");

            return $this->render('main_page', [
                'messages' => $this->message,
                'articles' => $this->articleRepository->get_articles()
            ]);
        }

        return $this->render('add_article', ['messages' => $this->message]);
    }

    public function search()
    {
        $contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';

        if ($contentType === "application/json") {
            $content = trim(file_get_contents("php://input"));
            $decoded = json_decode($content, true);

            header('Content-type: application/json');
            http_response_code(200);

            echo json_encode($this->articleRepository->getArticleByTitle($decoded['search']));
        }
    }

    public function like(int $id) {
        $this->articleRepository->like($id);
        http_response_code(200);
    }

    public function dislike(int $id) {
        $this->articleRepository->dislike($id);
        http_response_code(200);
    }

    private function validate(array $file): bool
    {
        if ($file['size'] > self::MAX_FILE_SIZE) {
            $this->message[] = 'File is too large for destination file system.';
            return false;
        }

        if (!isset($file['type']) || !in_array($file['type'], self::SUPPORTED_TYPES)) {
            $this->message[] = 'File type is not supported.';
            return false;
        }
        return true;
    }
}
