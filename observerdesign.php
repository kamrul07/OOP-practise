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
               <h2>OOP practise</h2>
               <hr>
               <br> 
               
               <form action="<?php echo $_SERVER['SCRIPT_NAME']?>" method="post">
                   <input type="number" placeholder="Number 1" name="num1">
                   <input type="number" placeholder="Number 2" name="num2">
                   <input type="submit" placeholder="calculate" name="submit"> 
               </form>
               
         <?php
      spl_autoload_register(function($class_name){
          include "inc/".$class_name.".php";
          
      });
        $s1=new mainNotifiation();
        $s2=new notification1();
        $s3=new notification2();
        $s1->notified($s2);
        $s1->notified($s3);
        $s1->action();
       
                     
                     
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