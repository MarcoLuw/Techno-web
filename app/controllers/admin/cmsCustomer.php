<?php 
    class cmsCustomer extends Controller {
        public $adModel;
        public $userModel;
        public function __construct(){
            $this->adModel = $this->model("adminModel");
            $this->userModel = $this->model("userModel");
        }
        public function Index() {
            if(!empty($_SESSION["id"])) {
                $output = "";
                $id = $_SESSION["id"];
                $result = $this->adModel->getUsername($id);                
                $row = mysqli_fetch_assoc($result);
                $result2 = $this->userModel->getAll();
                while($row2 = mysqli_fetch_assoc($result2)) {
                    $output .= '
                    <tr>
                        <th scope="row">'.$row2["id"].'</th>
                        <td>'.$row2["fullName"].'</td>
                        <td>'.$row2["username"].'</td>
                        <td>'.$row2["email"].'</td>
                        <td>'.$row2["phone"].'</td>
                        <td>'.$row2["address"].'</td>
                        <td>'.$row2["creationTime"].'</td>
                    </tr>
                    ';
                }
                
                
                $this->view('admin', [
                    "Page" => "cms-customer",
                    "name" => $row["username"],
                    "output" => $output
                ]);
            }
            else {
                header("Location: /asignment_web/admin/Login");
            }    
        }
    }
?>