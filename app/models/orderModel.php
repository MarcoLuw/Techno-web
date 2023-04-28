<?php 
    class OrderModel extends Database {
        public function create($name, $phone, $address, $total) {
            $q = "INSERT INTO order VALUES('$name', '$phone', '$address', $total, 'new order', current_timestamp())
            ";
            
            return mysqli_query($this->conn, $q);
        }
    }

?>