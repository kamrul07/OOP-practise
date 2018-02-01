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
               
         <?php
$db = new mysqli("localhost","root","","test");
if(mysqli_connect_errno()){
    
    echo "Please Check username and password";
    
}    
  else{
      echo "Connection Successful";
      
  }          

$data = "select * from test";
$result = $db->query($data);
            
print_r($result);           
            
  $update_table = "update test set phone='0135555' where id='1'";
    
$after_update=$db->query($update_table);
 $result1 = $db->query($data);
      echo "<br>Updated data are: <br>";        
while($info1=$result1->fetch_object()){
    
  
    echo $info1->PHONE."<br>";
    
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