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
               <h2>Class - Method - Object</h2>
               <hr>
               <br> 
         <?php
            class shuvo{
                
            public $age;
            public $partner;
            const SHUVO ="Lisa";
            public static $p="this is static class";
            public  function sMethod(){
                 echo $this->age."<br>";
                 echo "Constant: " .shuvo::SHUVO."<br>";
                 echo self::$p; 
                
            }
            
            public static function ssMethod(){
                echo self::SHUVO;
                 echo "Constant: " .shuvo::SHUVO."<br>";
                 
            }    
            }
            
             $sObject = new shuvo; 
             $sObject->age=26;
             $sObject->sMethod();
            shuvo::ssMethod();
            
            
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