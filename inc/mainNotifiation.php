<?php
class mainNotifiation{
    public $noti=array();
    public function Notified($method){
        if($method instanceof notification){
            
            $this->noti[]=$method;
        
        }
        else{
            
            echo "This is not a instance";
        }
        
        
    }
    
    public function action(){
        
        foreach($this->noti as $a){
           
            echo $a->getNotified();
           print_r($a); 
        }
        
    }
    
}

?>