<?php 
    class Login extends Controller {
        public function Index() {
            
            $this->viewAuthUser("Login", [

            ]);
            
        }
        public function Check() {
            $err = "";
            $user = $this->model("userModel");
            if(isset($_POST["btnLogin"])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $result = $user->checkUser($username);
                $row = mysqli_fetch_assoc($result);
                if(mysqli_num_rows($result) > 0) {
                    if(password_verify($password, $row["password"])) {
                        $_SESSION['user'] = $username;
                        $_SESSION['id'] = $row['id'];
                        header("Location: /asignment_web/Home");
                    }
                    else {
                      $err = "Wrong password";  
                    }
                } 
                else {
                    $err = "username not registered";
                }
                $this->viewAuthUser("Login", [
                    "err" => $err
                ]);
            }
        }
    }
?>