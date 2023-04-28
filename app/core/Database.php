<?php 

class Database {
    public $conn;
    protected $server = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $dbname = "eniac";

    function __construct() {
        $this->conn = new mysqli($this->server, $this->username, $this->password, $this->dbname);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }
}

?>