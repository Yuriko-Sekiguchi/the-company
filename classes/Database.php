<?php

class Database{
    private $server_name = "localhost";
    private $username = "root";
    private $password = "root";
    private $db_name = "the_company";

    protected $conn;

    public function __construct(){ //constructor is to open the connection
        $this->conn = new mysqli($this->server_name, $this->username, $this->password, $this->db_name);

        if($this->conn->connect_error){
            die("Cannot connect to DB ".$this->db__name.":".$this->conn->connect_error);
        }
    }


}
?>