<?php
class class_1{
    public $a;
    public $b;
    private $c;
    
    public function c1(){
        
        $this->a=1;
        $this->b=2;
            echo "Here is the passing value $this->a <br>";
            
            foreach($this as $s=>$value){
                
                echo "this is key: ".$s."and this is value ".$value."<br>";
                
            }
     
    }
    
    public function c2(){
       echo "chaining is succesfull <br>";
        print_r($this->c1()) ;
      
    }
    
    public function c3($v1,$v2){
       echo "cloning object successfull <br>";
        echo $v1."<br>";
        echo $v2."<br>";
    }
}


?>