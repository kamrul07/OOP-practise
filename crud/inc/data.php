<?php 
include "db.php";



class data{
    private $name;
private $email;
private $phone;
   public function readData(){
       $main_connection= new db;
       $sql="select * from test";
       $stmt=$main_connection->prepareOwn($sql);
       $stmt->execute();
       return $stmt->fetchAll();
   } 
    
    public function setname($name){
        $this->name=$name;
        
    }
    public function setemail($email){
        $this->email=$email;
        
    }
    public function setphone($phone){
        $this->phone=$phone;
        
    }
    public function insertdata(){
        $main_connection= new db;
        $isql="INSERT INTO test(fullName,EMAIL,PHONE) value(:name,:email,:phone)";
        $stmti=$main_connection->prepareOwn($isql);
        $stmti->bindParam(':name',$this->name);
        $stmti->bindParam(':email',$this->email);
        $stmti->bindParam(':phone',$this->phone);
        return $stmti->execute();
        
    }
}

?>