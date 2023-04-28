<?php 
    class CategoryModel extends Database {
        public function getAll() {
            $q = "SELECT * FROM category";
            return mysqli_query($this->conn, $q);
        }
        // create new category
        public function createCate($title, $img){
            $sql = "INSERT INTO category (title, image)
                    VALUES ('{$title}', '{$img}')";
            $query = mysqli_query($this->conn, $sql);
            return $query;
        }

        // find category
        public function findCate($id) {
            $sql = "SELECT * FROM category WHERE id = {$id}";
            $query = mysqli_query($this->conn, $sql);
            return $query;
        }

        // edit category model
        public function editCate($id, $title, $img) {
            $sql = "UPDATE category 
                    SET title = '{$title}', image = '{$img}'
                    WHERE id = '{$id}'";
            $result = mysqli_query($this->conn, $sql);
            return $result;
        }
        
        //  delete category model
        public function deleteCate($id) {
            $sql = "DELETE FROM category WHERE id = {$id}";
            $result = mysqli_query($this->conn, $sql);
            return;
        }

        // sql injection protected
        public function protectInjection($id) {
            return mysqli_real_escape_string($this->conn, $id);
        }
    }
?>

