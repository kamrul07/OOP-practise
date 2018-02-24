<?php

$test= new db;
$test->connection();
class db{
    
    public  $db_connect;
    public  function connection(){
        if(!isset( $this->db_connect)){}
        try{
            $this->db_connect = new PDO("mysql:host=localhost;dbname=test","root","");
            
        }catch(PDOexception $e){
            
            echo $e;
        }
    
        return $this->db_connect;
    }
    
    public function prepareOwn($sql){
        
        return $this->connection()->prepare($sql);
        
    }
    
}

?>