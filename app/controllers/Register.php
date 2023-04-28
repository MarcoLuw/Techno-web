<?php 
    class Register extends Controller {
        public $userModel;

        public function __construct() {
            $this->userModel = $this->model("userModel");
        }
        public function Index() {
            $this->viewAuthUser("register", [   
                    
            ]);
        }
        public function result() {
            if(isset($_POST["btnRegister"])) {
                $fullName = $_POST["name"];
                $username = $_POST["username"];
                $password = $_POST["password"];
                $password = password_hash($password, PASSWORD_DEFAULT);
                $email = $_POST["email"];
                $phone = $_POST["phone"];
                $address = $_POST["address"];
    
                $result = $this->userModel->insertUser($fullName, $username, $email, $phone, $address, $password);
                $this->viewAuthUser("register", [   
                    "result" => $result,
                ]);         
            } 
                 
        }
    }
?>