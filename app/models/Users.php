<?php

class Users {
    use Model;
    protected $table = 'users';

    protected $allowedColumns = [
        'email',
        'password'
    ];
    public function get() {
        return $this->select();
    }
    public function validate($data){
        $this->errors = [];

        if(empty($data['phone'])){
            $this->errors['phone'] = "Yêu cầu nhập số điện thoại!";
        }

        if(empty($data['password'])){
            $this->errors['password'] = "Yêu cầu nhập mật khẩu!";
        }

        if(empty($data['email'])){
            $this->errors['email'] = "Yêu cầu nhập email!";
        }

        if(empty($data['address'])){
            $this->errors['address'] = "Yêu cầu nhập địa chỉ!";
        }

        if(empty($this->errors)){
            return true;
        }
        
        return false;
    }
    public function data_table() { //get table employee info
        $sql = "SELECT * FROM users";
		$result = $this->query($sql);
		return $result; 

    }
    public function get_employee(){
		global $db;
		$stmt = $db->query("SELECT * FROM users");
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function add_employee(){
        $users = $this->query("SELECT * FROM users");
        return ["users" => $users ];

    }
    public function edit_employee(){
        if (isset($_GET['id'])) {
            $name = $this->query("SELECT * FROM users");
            $phone = $this->query("SELECT * FROM users");
            $address = $this->query("SELECT * FROM users");
            $email = $this->query("SELECT * FROM users");
            return ["name" => $name, "phone" => $phone, "address" => $address, "email" => $email];
        }
        return []; 
    }
    public function delete_employee($id){
        global $db;
        $stmt = $db->prepare("DELETE FROM users WHERE id = ? ");
        $stmt->execute(array($id));
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}