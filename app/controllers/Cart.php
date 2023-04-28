<?php
class Cart extends Controller
{
    public $userModel;
    public $productModel;
    public $orderModel;

    public function __construct()
    {
        $this->userModel = $this->model("userModel");
        $this->productModel = $this->model("productModel");
        $this->orderModel = $this->model("orderModel");
    }

    public function Index()
    {
        if (isset($_SESSION["user"])) {
            if (isset($_POST['add-to-cart'])) {

                if (isset($_SESSION['cart'])) {
                    $check = false;
                    $temp = 0;
                    $count = count($_SESSION['cart']);
                    for ($i = 0; $i < $count; $i++) {
                        if ($_SESSION['cart'][$i]['id'] == $_POST['id']) {
                            $check = true;
                            $temp = $i;
                            break;
                        }
                    }
                    if ($check == true) {
                        $_SESSION['cart'][$temp]['quantity'] += $_POST['quantity'];
                    } else {
                        $_SESSION['cart'][$count] = array(
                            'id' => $_POST['id'],
                            'quantity' => $_POST['quantity'],
                        );
                    }
                } else {
                    $_SESSION['cart'][0] = array(
                        'id' => $_POST['id'],
                        'quantity' => $_POST['quantity'],
                    );
                }
            }
            $output = "";
            if (!empty($_SESSION['cart'])) {
                $total = 0;
                //for ($x = 0; $x < count($_SESSION['cart']); $x++) {
                foreach ($_SESSION['cart'] as $x => $value) {
                     
                    $result = $this->productModel->getProductById($_SESSION['cart'][$x]['id']);
                    $row = mysqli_fetch_assoc($result);

                    $total += $row['price'] * $_SESSION['cart'][$x]['quantity'];

                    $output .= '
                    <tr>
                    <td class="product-thumbnail">
                        <img src="public/image/' . $row['image'] . '" alt="Image" class="img-fluid">
                    </td>
                    <td class="product-name">
                        <h2 class="h5 text-black">' . $row['name'] . '</h2>
                    </td>
                    <td>$' . $row['price'] . '</td>
                    <td>
                        <div class="input-group mb-3 d-flex align-items-center quantity-container" style="max-width: 120px;">
                            <div class="input-group-prepend">
                                <button class="btn btn-outline-black decrease" type="button">&minus;</button>
                            </div>
                            <input type="text" name="PT" class="form-control text-center quantity-amount" value="' . $_SESSION['cart'][$x]['quantity'] . '" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                            <div class="input-group-append">
                                <button class="btn btn-outline-black increase" type="button">&plus;</button>
                            </div>
                        </div>

                    </td>
                    <td> $' . $row['price'] * $_SESSION['cart'][$x]['quantity'] . ' </td>
                    <td><a href="Cart/delete/' . $row['id'] . '" class="btn btn-black btn-sm">X</a></td>
                </tr>
                ';
                }
                $this->view("application", [
                    "Page" => "cart",
                    'output' => $output,
                    'total' => $total,
                    'count' => count($_SESSION['cart'])
                ]);
            } else {
                $output = "Empty Cart";
                $this->view("application", [
                    "Page" => "cart",
                    'output' => $output,
                ]);
            }
        } else {
            header("Location: /asignment_web/Login");
        }
    }

    public function Submit() {
        if(isset($_POST['btnOrder'])) {
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $total = $_POST['total'];
            $this->orderModel->create($name, $phone, $address, $total);

        }
    }
    public function delete($productId) {
        if(isset($_SESSION['cart'])) {
            if(!empty(isset($_SESSION['cart']))) {
                foreach ($_SESSION['cart'] as $x => $value) {
                    if($_SESSION['cart'][$x]['id'] == $productId){
                        unset($_SESSION['cart'][$x]);
                        echo "Deleted Successful";
                        break;
                    }
                }
                header("Location: /asignment_web/Cart");
            }
        }
    }
}
