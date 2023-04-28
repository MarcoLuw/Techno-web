<?php 
    class Profile extends Controller {
        public $userModel;
        public function __construct(){
            $this->userModel = $this->model("userModel");
        }
        public function Index() {
            if(!empty($_SESSION["id"])) {
                $id = $_SESSION['id'];
                $count = 0;
                if(!empty($_SESSION['cart'])) {
                    $count = count($_SESSION['cart']);
                }
                $result = $this->userModel->getUsername($id);
                if(mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                    $this->view('application', [
                        "Page" => "profile",
                        "username" => $row['username'],
                        "name" => $row['fullName'],
                        "email" => $row['email'],
                        "phone" => $row['phone'],
                        "address" => $row['address'],
                        'count' => $count,

                    ]);
                }
            }
            else {
                header("Location: /asignment_web/Login");
            }    
        }
    }
?>
