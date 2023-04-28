<?php 
    class Dashboard extends Controller {
        public $adModel;
        public $cateModel;
        public $userModel;
        public $productModel;
        public function __construct(){
            $this->adModel = $this->model("adminModel");
            $this->cateModel = $this->model("categoryModel");
            $this->userModel = $this->model("userModel");
            $this->productModel = $this->model("productModel");
        }
        public function Index() {
            if(!empty($_SESSION["id"])) {
                $id = $_SESSION["id"];
                $result = $this->adModel->getUsername($id);
                $row = mysqli_fetch_assoc($result);
                $result2 = $this->cateModel->getAll();
                $sum_user = $this->userModel->getAll();
                $sum_product = $this->productModel->getAll();
                $this->view('admin', [
                    "Page" => "dashboard",
                    "name" => $row["username"],
                    "count_category" => mysqli_num_rows($result2),
                    "count_user" => mysqli_num_rows($sum_user),
                    "count_product" => mysqli_num_rows($sum_product),
                ]);
                
            }
            else {
                header("Location: /asignment_web/admin/Login");
            }    
        }   
    }
?>