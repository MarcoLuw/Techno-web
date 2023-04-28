<?php 
    class Contact extends Controller {
        public function Index() {
            $count = 0;
            if(!empty($_SESSION['cart'])) {
                $count = count($_SESSION['cart']);
            }
            $this->view("application", [
                "Page" => "contact",
                'count' => $count,
            ]);
        }
    }
?>