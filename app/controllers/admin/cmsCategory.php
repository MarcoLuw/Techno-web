<?php 
    class cmsCategory extends Controller {
        public $adModel;
        public $cateModel;
        public function __construct(){
            $this->adModel = $this->model("adminModel");
            $this->cateModel = $this->model("categoryModel");
        }
        public function Index() {
            if(!empty($_SESSION["id"])) {
                $output = "";
                $id = $_SESSION["id"];
                $result = $this->adModel->getUsername($id);                
                $row = mysqli_fetch_assoc($result);
                $result2 = $this->cateModel->getAll();
                while ($row2 = mysqli_fetch_assoc($result2)) {
                    $output .= '
                    <tr>
                        <th scope="row">'.$row2["id"].'</th>
                        <td>'.$row2["title"].'</td>
                        <td>
                            <a href="admin/cmsCategory/delete?id='.$row2['id'].'" class="btn btn-warning" style="margin-right: 30px;">DELETE</a></button>
                            <a href="admin/cmsCategory/editRedirect?id='.$row2['id'].'" class="btn btn-success">Edit</a>
                        ';
                }
                $this->view('admin', [
                    "Page" => "cms-category",
                    "name" => $row["username"],
                    "output" => $output
                ]);
            }
            else {
                header("Location: /asignment_web/admin/Login");
            }    
        }

        public function create() {
            if(!empty($_SESSION["id"])) {
                $id = $_SESSION["id"];
                $result = $this->adModel->getUsername($id);                
                $row = mysqli_fetch_assoc($result);

                $title = $this->cateModel->protectInjection($_POST['title']);
                $img = $this->cateModel->protectInjection($_POST['image']);
                $result = $this->cateModel->createCate($title, $img);

                $this->view('admin', [
                    "Page" => "cms-redirect",
                    "name" => $row["username"]
                ]);
            }
            else {
                header("Location: /asignment_web/admin/Login");
            }
        }
        public function editRedirect() {
            if(!empty($_SESSION["id"])) {
                $id = $_SESSION["id"];
                $result = $this->adModel->getUsername($id);                
                $row = mysqli_fetch_assoc($result);
                
                // handle tato string to get id
                $str = $_SERVER['REQUEST_URI'];
                $arr = explode('=', $str);
                $edit_id = $arr[1];

                $this->view('admin', [
                    "Page" => "editForm",
                    "name" => $row["username"],
                    "id" => $edit_id
                ]);
            }
            else {
                header("Location: Login");
            }
        }

        public function edit() {
            if(!empty($_SESSION["id"])) {
                $id = $_SESSION["id"];
                $result = $this->adModel->getUsername($id);                
                $row = mysqli_fetch_assoc($result);

                // handle string to get id
                
                $edit_id = $this->cateModel->protectInjection($_POST['id']);
                $title = $this->cateModel->protectInjection($_POST['title']);
                $img = $this->cateModel->protectInjection($_POST['image']);
                $result2 = $this->cateModel->editCate($edit_id, $title, $img);

                $this->view('admin', [
                    "Page" => "cms-redirect",
                    "name" => $row["username"]
                ]);
            }
            else {
                header("Location: Login");
            }
        }

        public function delete() {
            $id = $_SESSION["id"];
            $result = $this->adModel->getUsername($id);  
            $row = mysqli_fetch_assoc($result);
            
            // handle string to get id
            $str = $_SERVER['REQUEST_URI'];
            $arr = explode('=', $str);
            $del_id = $arr[1];

            $this->cateModel->deleteCate($del_id);
            $this->view('admin', [
                "Page" => "cms-redirect",
                "name" => $row["username"]
            ]);
        }
    }
?>