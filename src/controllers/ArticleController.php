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
        $this->render('main_page');
    }

    public function add_article()
    {
        $this->render('add_article');
    }


    public function addArticle()
    {
        if ($this->isPost() && is_uploaded_file($_FILES['file']['tmp_name']) && $this->validate($_FILES['file'])) {
            move_uploaded_file(
                $_FILES['file']['tmp_name'],
                dirname(__DIR__).self::UPLOAD_DIRECTORY.$_FILES['file']['name']
            );

            // TODO create new project object and save it in database
            $article = new Article($_POST['title'], $_POST['description'], $_FILES['file']['name']);
            $this->articleRepository->addArticle($article);

            return $this->render('main_page', ['messages' => $this->message]);
        }
        return $this->render('add-article', ['messages' => $this->message]);
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

