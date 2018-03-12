<?php
require 'model/model.php';
class controller{
    public $model;
    
    public function __construct(){
        $this->model = new model();  
       
    }
    public function getallData(){
        
        require '/view/info.php';
    }
    public function getbyid($id){
        
       
                 return $this->model->readdataid($id);
        
    }
    public function datainsert(){
        
       
                 include 'view/insert.php';
        
    }
    public function dataupdate(){
        
       
                 include 'view/update.php';
        
    } public function datadelete(){
        
       
                 include 'view/delete.php';
        
    }
    
}


?>