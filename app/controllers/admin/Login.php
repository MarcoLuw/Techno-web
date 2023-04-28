<?php 
    class Login extends Controller {
        public function Index() {
            $err = "";
            $ad = $this->model("adminModel");
            if(isset($_POST["btnLogin"])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $result = $ad->checkAdmin($username);
                $row = mysqli_fetch_assoc($result);
                if(mysqli_num_rows($result) > 0) {
                    if($password == $row["password"]) {
                        $_SESSION['login'] = true;
                        $_SESSION['id'] = $row['id'];
                        header("Location: Dashboard");
                    }
                    else {
                      $err = "Wrong password";  
                    }
                } 
                else {
                    $err = "username not registered";
                }
            }
            $this->viewAuthAdmin("Login", [
                "err" => $err
            ]);
        }
    }
?>