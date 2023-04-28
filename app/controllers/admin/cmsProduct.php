<?php 
    class cmsProduct extends Controller {
        public $adModel;
        public $productModel;
        public function __construct(){
            $this->adModel = $this->model("adminModel");
            $this->productModel = $this->model("productModel");
        }
        public function Index() {
            if(!empty($_SESSION["id"])) {
                $output = "";
                $id = $_SESSION["id"];
                $result = $this->adModel->getUsername($id);                
                $row = mysqli_fetch_assoc($result);
                $result2 = $this->productModel->GetProduct();
                $section = $_SERVER['REQUEST_URI'];
                while($row2 = mysqli_fetch_assoc($result2)) {
                    $output .= '
                    <tr>
                        <th scope="row">'.$row2["id"].'</th>
                        <td>'.$row2["name"].'</td>
                        <td>'.$row2["description"].'</td>
                        <td>'.$row2["price"].'</td>
                        <td>'.$row2["image"].'</td>
                        <td style="white-space: nowrap;">
                            <a class="btn btn-outline-success" href="admin/cmsProduct/cmsEdit?'.'id='.$row2['id'].'">Edit</a>
                            <a class="btn btn-outline-danger" href="admin/cmsProduct/cmsDeleteProduct?id='.$row2['id'].'">Delete</a>
                        </td>
                    </tr>
                    ';
                }

                $output_arr = [];
                $output_arr = explode("</tr>", $output);
                $numpage = 8;

                $this->view('admin', [
                    "Page" => "cms-product",
                    "name" => $row["username"],
                    "output" => $output_arr,
                    "num" => count($output_arr) / $numpage,
                    "numpage" => $numpage,
                    "section" => $section
                ]);
            }
            else {
                header("Location: /asignment_web/admin/Login");
            }    
        }
        public function cmsEdit() {
            if(!empty($_SESSION["id"])) {
                $output = "";
                $id = $_SESSION["id"];
                $result = $this->adModel->getUsername($id);                
                $row = mysqli_fetch_assoc($result);
                
                $pos = stripos($_SERVER['REQUEST_URI'], '?id=');
                $num = 0; $i = 4;
                $num = substr($_SERVER['REQUEST_URI'], $pos + 4, strlen($_SERVER['REQUEST_URI']));

                $result2 = $this->productModel->getProductById($num);
                $output = $result2->fetch_assoc();

                $this->view('admin', [
                    "Page" => "cms-editform",
                    "name" => $row["username"],
                    "output" => $output,
                    "id" => $num
                ]);
            }
            else {
                header("Location: Login");
            }    
        }
        public function cmsEdited() {
            if(!empty($_SESSION["id"])) {
                $output = "";
                $id = $_SESSION["id"];
                $result = $this->adModel->getUsername($id);                
                $row = mysqli_fetch_assoc($result);

                $id = $_POST['id'];
                $name = $_POST['name'];
                $description = $_POST['description'];
                $price = $_POST['price'];
                $image = $_POST['image'];
                $category_id = $_POST['category_id'];

                $this->productModel->editProduct($id, $name, $description, $price, $image, $category_id);
                // header("Location: ../cmsProduct");
                $this->view('admin', [
                    "Page" => "cms-edited",
                    "name" => $row["username"]
                ]);
            }
            else {
                header("Location: Login");
            }    
        }
        public function cmsCreateProduct() {
            if(!empty($_SESSION["id"])) {
                $output = "";
                $id = $_SESSION["id"];
                $result = $this->adModel->getUsername($id);                
                $row = mysqli_fetch_assoc($result);
                $result2 = $this->productModel->GetProduct();
                while($row2 = mysqli_fetch_assoc($result2)) {
                    $output .= '
                    <tr>
                        <th scope="row">'.$row2["id"].'</th>
                        <td>'.$row2["name"].'</td>
                        <td>'.$row2["description"].'</td>
                        <td>'.$row2["price"].'</td>
                        <td>'.$row2["image"].'</td>
                        <td style="white-space: nowrap;">
                            <a class="btn btn-outline-success">Edit</a>
                            <a class="btn btn-outline-danger">Delete</a>
                        </td>
                    </tr>
                    ';
                }

                $this->view('admin', [
                    "Page" => "cms-createform",
                    "name" => $row["username"],
                    "output" => $output
                ]);
            }
            else {
                header("Location: Login");
            }    
        }
        public function cmsCreated() {
            if(!empty($_SESSION["id"])) {
                $output = "";
                $id = $_SESSION["id"];
                $result = $this->adModel->getUsername($id);                
                $row = mysqli_fetch_assoc($result);

                // $id = $_POST['id'];
                $name = $_POST['name'];
                $description = $_POST['description'];
                $price = $_POST['price'];
                $image = $_POST['image'];
                $category_id = $_POST['category_id'];

                $this->productModel->createProduct($name, $description, $price, $image, $category_id);

                // header("Location: cmsProduct");

                $this->view('admin', [
                    "Page" => "cms-edited",
                    "name" => $row["username"]
                ]);
            }
            else {
                header("Location: Login");
            }    
        }
        public function cmsDeleteProduct() {
            if(!empty($_SESSION["id"])) {
                $output = "";
                $id = $_SESSION["id"];
                $result = $this->adModel->getUsername($id);                
                $row = mysqli_fetch_assoc($result);
                
                $pos = stripos($_SERVER['REQUEST_URI'], '?id=');
                $num = 0; $i = 4;
                $num = substr($_SERVER['REQUEST_URI'], $pos + 4, strlen($_SERVER['REQUEST_URI']));

                $this->productModel->deleteProduct($num);

                $this->view('admin', [
                    "Page" => "cms-edited",
                    "name" => $row["username"],
                ]);
            }
            else {
                header("Location: Login");
            }    
        }
    }
?>