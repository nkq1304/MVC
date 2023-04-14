<?php 
class User extends Controller {
    protected $employee;
    public function __construct() {
        $this->employee = new Users;
    }

        public function index() {      
        if(isset($_SESSION['user']) == false){
            redirect('home/index');
            exit();
        }
         
    }

}