<?php 

class database{
    private $host, $database, $user, $password;
    public $connectDB;

    public function __construct(){
        $this->host = 'localhost';
        $this->user = 'root';
        $this->password = '12345678';
        $this->database='card';
    }

    public function connect(){
        try {
            $this->connectDB = new PDO("mysql:host=localhost;dbname=card", "root","12345678");
        } catch(PDOException $e){
            echo $e->getMessage();  
        }
    }   
}

?>