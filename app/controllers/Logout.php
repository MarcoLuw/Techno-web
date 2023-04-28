<?php 
    class Logout extends Controller {
        public function Index() {
            $_SESSION = [];
            session_unset();
            session_destroy();
            header("Location: ./Home");
        }
    }

?>