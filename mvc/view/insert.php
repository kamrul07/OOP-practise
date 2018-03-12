<?php

    
   $name=$_POST['name'];
             $email= $_POST['email'];
             $phone= $_POST['phone'];
    $this->model->setName($name); 
    $this->model->setEmail($email); 
    $this->model->setPhone($phone); 
    if($this->model->dataInsert()){  
        echo "Data insert Successful";
    }   


?>