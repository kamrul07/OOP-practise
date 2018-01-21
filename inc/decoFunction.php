<?php

class decoFunction{
public $df;
 

public function __construct($object){
    $this->df=$object;
}

public function modify(){
   $this->dh= $this->df->d1();
    echo $this->dh."modification done";
    
}




}

?>