<?php

class Admin {
    use Controller;
    public function __construct(){
    }
    public function index() {  
        if (isset($_SESSION["admin"])) {
            $data['admin'] = empty($_SESSION['admin']) ? 'admin' :$_SESSION['admin']->name;
          $this->view('admin/index',$data);
        }
    }
    public function data_table() {      //Select employee info
        $user= new Users;
        $data=$user->get_employee();
        $this->view('admin/data_table',$data);
    }
    public function detailTask() {  
        $this->view('admin/detailTask');
    }
    public function modal_add_employee($data) {  
        if (isset($_SESSION["admin"])) {
            $check = true;
            $user = new Users;
            if(isset($_POST['btn_add_employee'])){
                $check = true;
                $id = $_POST['id'];
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                $gender = $_POST['gender'];
                $type = $_POST['type'];
                $data = $user->add_employee($id, $name, $email, $phone, $address, $gender,$type);
            }
        }
        $this->view('admin/modal_add_employee',$data);
    }
    public function modal_delete_employee() {  
        $user = new Users;
        if (isset($_SESSION["admin"])) {
            if(isset($_POST['btn_delete_employee'])) {
                $id = $_POST['id'];
                $user->delete_employee($id);
                  header("Refresh:0");
              }
        }   
        $this->view('admin/modal_delete_employee');
    }
    public function modal_edit_employee() {  
        $this->view('admin/modal_edit_employee');
    }
    public function modal_delete_task() {  

        $this->view('admin/modal_delete_task');
    }
    public function modal_add_task() {  
        $this->view('admin/modal_add_task');
    }

    public function modal_edit_task() {  
        $this->view('admin/modal_edit_task');
    }
    public function logout() {
        if (isset($_SESSION["admin"])) {
            unset($_SESSION['admin']);
            redirect('home/index');
        }
    }

}    