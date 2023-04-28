<?php 
    class ProductModel extends Database {
        public function getAll() {
            $q = "SELECT * FROM products";
            return mysqli_query($this->conn, $q);
        }
        public function GetProduct() {
            $q = "SELECT * FROM products";
            return mysqli_query($this->conn, $q);
        }

        public function getProductPagination() {
            $per_page_product = 5;
            if(!isset($_GET['page'])) {
                $page = 1;
            }
            else {
                $page = $_GET['page'];
            }
            $per_page = ($page - 1) * $per_page_product;
            $q = "SELECT * FROM products order by id desc LIMIT $per_page, $per_page_product";
            $result = mysqli_query($this->conn, $q);
            return $result;
        }
        public function getProductById($productId) {
            $q = "SELECT * FROM products where id=$productId";
            return mysqli_query($this->conn, $q);
        }
        public function getProductByCategoryId($categoryId) {
            $q = "SELECT * FROM products where category_id = $categoryId";
            return mysqli_query($this->conn, $q);
        }
        public function editProduct($id, $name, $description, $price, $image, $category_id) {
            $query = "UPDATE products
                      SET `name` = '$name', `description` = '$description', `price` = '$price', `image` = '$image', `category_id` = '$category_id'
                      WHERE `id` = '$id'";
            return $this->conn->query($query);
        }
        public function createProduct($name, $description, $price, $image, $category_id) {
            $query = "INSERT INTO products (`name`, `description`, `price`, `image`, `category_id`)
                      VALUES ('$name', '$description', '$price', '$image', '$category_id')";
            return $this->conn->query($query);
        }
        public function deleteProduct($id) {
            $query = "DELETE FROM products WHERE `id`='$id'";
            return $this->conn->query($query);
        }
        public function sum($x, $y) {
            return $x + $y;
        }
    }
?>