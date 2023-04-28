<?php 
    class Products extends Controller {
        public $productModel;
        public function __construct(){
            $this->productModel = $this->model("productModel");
        }
        public function Detail($id) {
            $count = 0;
            if(!empty($_SESSION['cart'])) {
                $count = count($_SESSION['cart']);
            }
            $result = $this->productModel->getProductById($id);
            if(mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                
                $this->view("application", [
                    "Page" => "detail",
                    "id" => $row['id'],
                    "desc" => $row['description'],
                    "name" => $row["name"],
                    "price" => $row["price"],
                    "image" => $row["image"],
                    'count' => $count,
                ]);
            }
            
        }

        public function Index() {
            $count = 0;
            if(!empty($_SESSION['cart'])) {
                $count = count($_SESSION['cart']);
            }
            $output = "";
            //$section = $_SERVER['REQUEST_URI'];
            $result = $this->productModel->getAll();
            while($row = mysqli_fetch_assoc($result)) {
                $output .= '<div class="col-12 col-md-4 col-lg-3 mb-5">
                <a class="product-item" href="./Products/Detail/'.$row['id'].'">
                    <img src="public/image/'.$row['image'].'" class="img-fluid product-thumbnail">
                    <h3 class="product-title">'.$row["name"].'</h3>
                    <strong class="product-price">$'.$row["price"].'</strong>

                    <span class="icon-cross">
                        <img src="public/images/cross.svg" class="img-fluid">
                    </span>
                    
                </a>
                </div>';
            }
            

            $this->view("application", [
                "Page" => "products",
                "output" => $output,
                'count' => $count,
            ]);
        }

        public function Category($categoryId) {
            $count = 0;
            if(!empty($_SESSION['cart'])) {
                $count = count($_SESSION['cart']);
            }
            $output = "";
            //$section = $_SERVER['REQUEST_URI'];
            $result = $this->productModel->getProductByCategoryId($categoryId);
            while($row = mysqli_fetch_assoc($result)) {
                $output .= '<div class="col-12 col-md-4 col-lg-3 mb-5">
                <a class="product-item" href="./Products/Detail/'.$row['id'].'">
                    <img src="public/image/'.$row['image'].'" class="img-fluid product-thumbnail">
                    <h3 class="product-title">'.$row["name"].'</h3>
                    <strong class="product-price">$'.$row["price"].'</strong>

                    <span class="icon-cross">
                        <img src="public/images/cross.svg" class="img-fluid">
                    </span>
                    
                </a>
                </div>';
            }
            $this->view("application", [
                "Page" => "products",
                "output" => $output,
                'count' => $count,
            ]);
        }    
    }

?>