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
               <h2>OOP practise--MVC</h2>
               <hr>
               <br> 
             
              <?php
                 spl_autoload_register(function($class){
                     include "controller/".$class.".php";

                 });
                 
                $my_data= new controller();
                

            if(isset($_POST['create'])){
                 $my_data->datainsert();
            }            
                if(isset($_POST['update'])){
               $my_data->dataupdate();
            }                 
            ?> 
            <?php 
             if (isset($_GET['action']) && $_GET['action']=="delete"){
                $my_data->datadelete();
             }?>

            <?php 
             if (isset($_GET['action']) && $_GET['action']=="edit"){
                 $id = $_GET['id'];
                 $result =$my_data->getbyid($id);
             ?>
        <div class="form_div">
            <form action="" method="post">
                <input type="hidden" name="id" value="<?php echo $result['id']?>">
                <input type="text" name="name" value="<?php echo $result['fullName']?>">
                <input type="text" name="email" value="<?php echo $result['EMAIL']?>">
                <input type="text" name="phone" value="<?php echo $result['PHONE']?>">
                <input type="submit" name="update">  
            </form>
                <?php  }else{?>
       <div class="form_div">
            <form action="" method="post">
                <input type="text" name="name" placeholder="NAme">
                <input type="text" name="email" placeholder="Email">
                <input type="text" name="phone" placeholder="Phone">
                <input type="submit" name="create">  
            </form>           
        </div>
             <?php }?>  
             
        <?php $my_data->getallData(); ?>    
        </div>
       <div style="background-color:<?php
echo "black";
?>;width:100%;margin:0 auto;overflow: hidden;" id="header">
            
       
            <p style="color: red;text-align: center;font-size: 28px;padding: 0px 3px 18px 0px;line-height: 0px;"><a href="http://kamrulhasanshuvo.info">with shuvo</a> </p>
        </div>
        </div>
        
    </body>
</html>