<?php 
    $username = $_COOKIE['username'];
        if(isset($_FILES['photo'])){
         $name =$username."#".$_FILES['photo']['name'];
         print_r($_FILES['photo']);
         $temp = $_FILES['photo']["tmp_name"];
         echo ($_FILES['photo']['error']);
         $destination = "../users_img/$name";
         move_uploaded_file($temp,$destination);
        }