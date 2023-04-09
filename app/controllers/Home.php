<?php

class Home extends Controller {
    public function __construct() {
        
    }
    public function index() {
        $this->view('home/index');
        if(isset($_SESSION['user'])) {
            show($_SESSION['user']);
        }
    }
}