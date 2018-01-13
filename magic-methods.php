<!doctype html>
<html>
    
    <head>
    <title>Learn with me - array sourch code for practise</title>    
    </head>
    <body style="margin:0 auto;width:960px;background:#EAEAEA">
        
        <div style="background-color:<?php
echo "white";
?>;width:100%;margin:0 auto;overflow: hidden;" >
        <div style="background-color:<?php
echo "black";
?>;overflow: hidden;" >
            
            <h2 style="color:white;text-align:center;font-size:48px;padding: 27px;">Php tutorial with shuvo</h2>
            <h2 style="color: red;text-align: center;font-size: 28px;padding: 0px 3px 18px 0px;line-height: 0px;"><a href="http://kamrulhasanshuvo.info">with shuvo</a> </h2>
        </div>
        <div id="content" style="min-height:68vh;padding:20px">
        <h2 style="font-size:38px;text-align:center">OOP tutorials</h2>
      
        
               <br>
               <h2>Magic methods. __get(); ------ to access undefined properties.</h2>
               <h2>Magic methods. __set(); ------ to access undefined properties with values.</h2>
               <h2>Magic methods. __call(); ------ to access undefined methods with array values.</h2>
               <hr>
               <br> 
               
              <?php
            
            class shuvo{
                
               public function __get($pm){
                   
                   
                   echo "here is the $pm <br>";
               }
                public function __set($pm,$value){
                   
                   
                   echo "here is the $pm and $value <br>";
               }
                public function __call($pm,$value){
                   
                   
                   echo "here is the $pm and ". implode(',',$value);
               }
                
                
            }
            
            if(class_exists("shuvo")){
        
            
            $lisa = new shuvo();
            $lisa->shuvo;
            $lisa->shuvos=31;
            if(method_exists($lisa,'__get'))  { 
            $lisa->shuvoss(3,1,5);
                } 
                else{
                echo "Not found";
                    
                }
                
            }else{
                
                echo "not found";
            }
            ?> 
       
               
        </div>
       <div style="background-color:<?php
echo "black";
?>;width:100%;margin:0 auto;overflow: hidden;" id="header">
            
       
            <p style="color: red;text-align: center;font-size: 28px;padding: 0px 3px 18px 0px;line-height: 0px;"><a href="http://kamrulhasanshuvo.info">with shuvo</a> </p>
        </div>
        </div>
        
    </body>
</html>