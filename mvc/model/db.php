<?php
class db_connect{
    public static $pdo;
    public static function db(){
        try{
          self::$pdo= new PDO("mysql:dbname=test;host=localhost","root","");  
           
        }catch(PDOException $e){
            
            echo $e;
            
        }
        return self::$pdo;
    }
    
    public static function prepareMetheod($sql){
        
        return self::db()->prepare($sql);
        
    }
    
    
}


?>