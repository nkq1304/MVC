<?php

class Users {
    use Model;
    protected $table = 'employee';
    public function get() {
        return $this->select();
    }

    public function check_user($email) {
        $sql = "SELECT * FROM employee WHERE Email = '$email'";
		$result = $this->query($sql);
		return $result;   
    }

    public function login($email, $password) {
        $sql = "SELECT * FROM employee WHERE Email = '$email' and Password = '$password'";
		$result = $this->query($sql);
		return $result;    
    }

    public function signup() {
        // $email, $password, $phone, $address, $fullname
    }
    public function changepassword(){
        // $email, $newPassword
    }

}