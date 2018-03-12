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
                 $id = $_GET['id'];
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
                             
                             
                if(isset($_POST['update'])){
              $id=$_POST['id'];
              $name=$_POST['name'];
             $email= $_POST['email'];
             $phone= $_POST['phone'];
               $my_data->setname($name); 
               $my_data->setemail($email); 
               $my_data->setphone($phone); 
                if($my_data->updatedata($id)){
                    
                    echo "update successfull";
                    
                }
            }                 
            ?> 
                       <?php 
             if (isset($_GET['action']) && $_GET['action']=="delete"){
                 $id1 = $_GET['id'];
                 $my_data->delete($id1);
                 if($my_data->delete($id1)){
                     
                     echo "Data deleted";
                     
                 }
             
             
             }
  ?>
    
            
            
            
            <?php 
             if (isset($_GET['action']) && $_GET['action']=="edit"){
                 $id1 = $_GET['id'];
                 $result =$my_data->readbyid($id1);
  ?>
       
             
                         <div class="form_div">
            
            <form action="" method="post">
                <input type="hidden" name="id" value="<?php echo $result['id']?>">
                <input type="text" name="name" value="<?php echo $result['fullName']?>">
                <input type="text" name="email" value="<?php echo $result['EMAIL']?>">
                <input type="text" name="phone" value="<?php echo $result['PHONE']?>">
                <input type="submit" name="update">
                
                
            </form>
             
                <?php  }else{           
             
            ?>
               
                      
                                    
                      
                       <div class="form_div">
            
            <form action="" method="post">
                <input type="text" name="name" placeholder="NAme">
                <input type="text" name="email" placeholder="Email">
                <input type="text" name="phone" placeholder="Phone">
                <input type="submit" name="create">
                
                
            </form>
            
        </div>
             <?php }?>
            
            
            
            
            <?php
            foreach($my_data->readData() as $key=>$value){
            ?>
            <div class="information">
                
                <p>NAme: <?php echo $value['fullName'] ?></p>
                <p>Email: <?php echo $value['EMAIL'] ?></p>
                <p>Phone: <?php echo $value['PHONE'] ?></p>
                <?php echo "<p style='color:red'><a href='index.php?action=edit&id=".$value['id']."'>Update</a></p>";?>
                <?php echo "<p style='color:red'><a href='index.php?action=delete&id=".$value['id']."'>DELETE</a></p>";?>
            </div>
            <hr>
        <?php }?>       
        </div>
        <?php
            
            
            ?>

        
        
       <div style="background-color:<?php
echo "black";
?>;width:100%;margin:0 auto;overflow: hidden;" id="header">
            
       
            <p style="color: red;text-align: center;font-size: 28px;padding: 0px 3px 18px 0px;line-height: 0px;"><a href="http://kamrulhasanshuvo.info">with shuvo</a> </p>
        </div>
        </div>
        
    </body>
</html>