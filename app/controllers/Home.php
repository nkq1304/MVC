<?php

class Home {
    use Controller;
	
    public function __construct(){
    }

    public function index(){  //login page
		if($_SERVER['REQUEST_METHOD'] == "POST"){
            $user = new Users;
            $arr['phone'] = $_POST['phone'];
            $row = $user->first($arr);
            //check passwork
            if($row){
                if($row->password == $_POST['password'] && $row->type != "Admin"){
                    $_SESSION['user'] = $row;
                    redirect('user/index');
                }
                else {
                    $_SESSION['admin'] = $row;
                    redirect('admin/index');
                }


            }
            $user->errors['phone'] = "Số điện thoại không hợp lệ";
            $data['errors'] = $user->errors;
        }
        $this->view('home/index');
    }


    public function signup() {
		$user = new Users;
		if($user->validate($_POST)){
			$user->insert($_POST);
			redirect('home/index');
		}
		$data['errors'] = $user->errors;
        $this->view('home/signup',$data);
    }
}