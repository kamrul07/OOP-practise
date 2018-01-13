<?php
class method_chain{
    public $a;
    public $b;
    
    public function mc($x,$y){
        
        $this->a = $x;
        $this->b =$y;
        return $this;
        
    }
    
    public function md(){
        
        echo $this->a ." ". $this->b;
         return $this;
        
    }
    
}


?>