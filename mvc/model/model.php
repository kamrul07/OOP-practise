<?php

require 'model/db.php';

class model{
    
    private $email;
    private $name;
    private $phone;
    
    public function readdata(){
   
        $sql="SELECT * from test";
        $stmt = db_connect::prepareMetheod($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function readdataid($id){
   
        $sql="SELECT * from test where id=:id";
        $stmt = db_connect::prepareMetheod($sql);
        $stmt->bindParam(':id',$id);
        $stmt->execute();
        return $stmt->fetch();
    }
    
    public function setName($name){
        $this->name =$name;
        
        
    }
    public function setEmail($email){
        $this->email =$email;
        
        
    }public function setPhone($phone){
        $this->phone =$phone;
        
        
    }
    
    
    public function dataInsert(){
      
     $isql="INSERT INTO test(fullName,EMAIL,PHONE) value(:name,:email,:phone)";
        $stmti=db_connect::prepareMetheod($isql);
        $stmti->bindParam(':name',$this->name);
        $stmti->bindParam(':email',$this->email);
        $stmti->bindParam(':phone',$this->phone);
        return $stmti->execute();
      
        
    } 
    public function updateInsert($id){
       
         $sql="UPDATE test SET fullName=:name,EMAIL=:email,PHONE=:phone where id=:id";
        $stmt = db_connect::prepareMetheod($sql);
        $stmt->bindParam(':name',$this->name);
        $stmt->bindParam(':email',$this->email);
        $stmt->bindParam(':phone',$this->phone);
        $stmt->bindParam(':id',$id);
      return $stmt->execute();

    }
    public function delete($id){
       
        $sql="DELETE from test where id=:id";
        $stmt = db_connect::prepareMetheod($sql);
        $stmt->bindParam(':id',$id);
        return $stmt->execute();
  
    }
    
}
?>