<?php

class DAL {
    public $conn;
    public function __construct()
    {
        define('DB_SERVER', 'localhost');
        define('DB_USERNAME', 'root');
        define('DB_PASSWORD', '');
        define('DB_NAME', 'electronic_waste');
        try{
            $this->conn = new PDO('mysql:host='.DB_SERVER.';dbname='.DB_NAME, DB_USERNAME, DB_PASSWORD);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            echo "Connection failed". $e->getMessage();
        }
            
    }
        
    public function db_command($sql, $params = [])
    {
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($params);
        return $stmt;
    }

    public function db_close() {
        $this->conn = null;
    }
}

?>