<?php
    class AdminModel extends Database {
        public function checkAdmin($username) {
            $q = "SELECT * FROM admin where username = '$username' ";
            $result = mysqli_query($this->conn, $q);    
            return $result;
        }
        public function getUsername($id) {
            $q = "SELECT * FROM admin where id = $id ";
            $result = mysqli_query($this->conn, $q);
            return $result;
        }
        
    }
?>