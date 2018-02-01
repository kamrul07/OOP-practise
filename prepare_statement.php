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
               <h2>OOP practise-- Prepare Statements</h2>
               <hr>
               <br> 
               
         <?php
$db = new mysqli("localhost","root","","test");
if(mysqli_connect_errno()){
    
    echo "Please Check username and password<br>";
    
}    
  else{
      echo "Connection Successful<br>";
      
  }          


            
            ?>
   <?php
    
    $psv_sql="update test set phone=? where id=?";
    $psv= $db->prepare($psv_sql);        
    $psv->bind_param("si",$phone_n,$id_n);
    $phone_n="01716294384";
    $id_n=2;
    $psv->execute();        
    $psv_result_sql="select fullname,phone from test";
    $psv_result=$db->prepare($psv_result_sql);
    $psv_result->execute();
    $psv_result->bind_result($fullname,$phone);
    while($psv_result->fetch()){
        
        echo "The name is ".$fullname." Phone Number is ".$phone."<br>";
        
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