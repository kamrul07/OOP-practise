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
               <h2>OOP practise-- PDO -- Php data object</h2>
               <hr>
               <br> 
               

   <?php
    $dsn="mysql:dbname=test;host=localhost";
            $user="root";
            $pass="";
            try{
                
                $db=new PDO($dsn,$user,$pass);
                
            }catch(PDOexception $e){
                echo "Connection failed ".$e->getMessage()."<br>";
            }
            $sql="select * from test";
            $result=$db->query($sql);
            foreach($result as $data){
                echo $data['PHONE']."<br>";
                
            }
            
            echo "PDO with basic statements";
            $id=2;
            $pdo="select * from test where id=:id";
            $pdo_sql = $db->prepare($pdo);
            $pdo_sql->bindParam(':id',$id,PDO::PARAM_INT);
            $pdo_sql->execute();
           
            
            $test=$pdo_sql->fetch();
            echo "<pre>";
            print_r($test);
            echo "</pre>";
         foreach($test as $test){
              echo $test."<br>";
             
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