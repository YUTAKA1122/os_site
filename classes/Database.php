<?php
session_start();
class Database{
    // private $servername = 'localhost';
    // private $username = 'root';
    // private $password = 'root';
    // private $db_name = 'os_site';
    // public $conn;

    private $servername = 'us-cdbr-east-04.cleardb.com';
    private $username = 'bc0834ecc021a1';
    private $password = 'f7c8f6cf';
    private $db_name = 'heroku_6466d73cb3ad493';
    public $conn;

    function __construct()
    {
        return $this->conn = new mysqli($this->servername,$this->username,$this->password,$this->db_name);
    }
    
}



?>