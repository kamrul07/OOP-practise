<?php


    $id=$_GET['id'];
    if($this->model->delete($id)){
        
        echo "Delete Successful";
    }
    


?>