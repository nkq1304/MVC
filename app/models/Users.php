<?php

class Users {
    use Model;
    protected $table = 'users';
    public function get() {
        return $this->select();
    }

    public function check_user() {
        // $email
    }

    public function login() {
        // $email, $password
    }

    public function signup() {
        // $email, $password, $phone, $address, $fullname
    }
    public function changepassword(){
        // $email, $newPassword
    }

}