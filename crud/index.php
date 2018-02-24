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
               <h2>OOP practise--CRUD</h2>
               <hr>
               <br> 
               
              <?php
                 spl_autoload_register(function($class){
                     include "inc/".$class.".php";

                 });
                 
                $my_data= new data;

            if(isset($_POST['create'])){
              $name=$_POST['name'];
             $email= $_POST['email'];
             $phone= $_POST['phone'];
               $my_data->setname($name); 
               $my_data->setemail($email); 
               $my_data->setphone($phone); 
                if($my_data->insertdata()){
                    
                    echo "Insert successfull";
                    
                }
            }
            ?> 
            <?php
            foreach($my_data->readData() as $key=>$value){
            ?>
            <div class="information">
                
                <p>NAme: <?php echo $value['fullName'] ?></p>
                <p>Email: <?php echo $value['EMAIL'] ?></p>
                <p>Phone: <?php echo $value['PHONE'] ?></p>
                
            </div>
            <hr>
        <?php }?>       
        </div>
        <?php
            
            
            ?>
        <div class="form_div">
            
            <form action="" method="post">
                <input type="text" name="name" placeholder="NAme">
                <input type="text" name="email" placeholder="Email">
                <input type="text" name="phone" placeholder="Phone">
                <input type="submit" name="create">
                
                
            </form>
            
        </div>
        
        
       <div style="background-color:<?php
echo "black";
?>;width:100%;margin:0 auto;overflow: hidden;" id="header">
            
       
            <p style="color: red;text-align: center;font-size: 28px;padding: 0px 3px 18px 0px;line-height: 0px;"><a href="http://kamrulhasanshuvo.info">with shuvo</a> </p>
        </div>
        </div>
        
    </body>
</html>