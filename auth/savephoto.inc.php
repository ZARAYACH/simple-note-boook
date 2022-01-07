<?php 
    $username = $_COOKIE['username'];
        if(isset($_FILES['photo'])){
         $name =$username."à".$_FILES['photo']['name'];
         $temp = $_FILES['photo']["tmp_name"];
         $destination = "../usersimg/$name";
        if(move_uploaded_file($temp,$destination)){
            header("location:../pages/user-home.php?error=savedImg");
            exit();
        }else{
            header("location:../pages/user-home.php?error=unsavedImg");
            exit();
        } 
        }
        else
        {
            header("location : ../pages/user-home.php?error=wrongWay");
            exit();
        }