<?php

require_once 'AppController.php';

class DefaultController extends AppController {

    public function index()
    {
        $this->render('login');
    }
    public function registration()
    {
        $this->render('registration');
    }
    public function main_page()
    {
        $this->render('main_page');
    }
}