<?php 
    class Home extends Controller {
        public $categoryModel;

        public function __construct() {
            $this->categoryModel = $this->model("categoryModel");
        }
        
        public function Index() {
            $count = 0;
            if(isset($_SESSION['cart'])) {
                $count = count($_SESSION['cart']);
            }
            $output = "";
            $result = $this->categoryModel->getAll(); 
            while($row = mysqli_fetch_assoc($result)) {
                $output .= '
                    <div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
                    <a class="product-item" href="Products/Category/'.$row['id'].'">
                        <img src="public/image/category/'.$row['image'].'" class="img-fluid product-thumbnail">
                        <h3 class="product-title">'.$row['title'].'</h3>
                    </a>
            </div>
                ';
            }
            $this->view("application", [
                "Page" => "home",
                "output" => $output,
                'count' => $count,
            ]);
        }
    }
?>