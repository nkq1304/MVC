<?php 
class User extends Controller {
    protected $employee;
    public function __construct() {
        $this->employee = new Users;
    }

}