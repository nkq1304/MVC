<?php 
class User extends Controller {
    public function __construct() {

    }
    public function index(){
        //TODO
        $data = array();
        $this->view('user/index', $data);
    }
}