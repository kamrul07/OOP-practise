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
    $db_name="mysql:dbname=test;host=localhost";        
    $user="root";
    $pass="";
            try{
                $db=new PDO($db_name,$user,$pass);
                
            }catch(PDOexception $e){
                
                echo $e->getMessage();
            }
            $phone ="017162943843";
            $id =2;
            $sql="select * from test where id=:id or phone=:phone";
            $pdo_bs=$db->prepare($sql);
            $pdo_bs->execute(array(':id'=>$id,':phone'=>$phone));
            while($result=$pdo_bs->fetch()){
                
                echo $result['fullName'];
            }
              $name="Lutfor Rahman";
            $dsql="delete from test where fullName=:name";
            $pdo_d=$db->prepare($dsql);
            $pdo_d->bindParam(':name',$name);
            $pdo_d->execute();
          
            
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