<?php
    class UserModel extends Database {
        public function getAll() {
            $q = "SELECT * FROM users";
            return mysqli_query($this->conn, $q);
        }

        public function checkUser($username) {
            $q = "SELECT * FROM users where username = '$username' ";
            $result = mysqli_query($this->conn, $q);    
            return $result;
        }
        public function getUsername($id) {
            $q = "SELECT * FROM users where id = $id ";
            $result = mysqli_query($this->conn, $q);
            return $result;
        }
        public function insertUser($fullName, $username, $email, $phone, $address, $password) {
            $q = "INSERT INTO users VALUES(null, '$fullName', '$username', '$email', '$phone', '$address', '$password', current_timestamp())";
            $result = false;
            if(mysqli_query($this->conn, $q)) {
                $result = true;
            }
            return $result;
        }
        
        
    }
?>
