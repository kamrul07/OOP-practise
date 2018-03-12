 <?php
            foreach($this->model->readdata() as $key=>$value){
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
