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
//    public function main_page()
//    {
//        $this->render('main_page');
//    }

    public function development()
    {
        $this->render('development');
    }

    public function design()
    {
        $this->render('design');
    }

    public function administration()
    {
        $this->render('administration');
    }

    public function sci_fi()
    {
        $this->render('sci_fi');
    }

}