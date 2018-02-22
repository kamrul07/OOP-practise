<?php
class db{
    
    public $db_connect;
    public function connection(){
        
        try{
            $this->db_connect=new PDO('mysql:host=localhost;dbname=test','root','');
            echo "connection Successfull";
        }catch(PDOexception $e){
            
            echo $e;
        }
        
    }
    
}

?>