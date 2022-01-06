<?php

if(isset($_POST['delete'])){

    $fileNme = $_POST['fileName'] ;
    if(!unlink($fileNme)){
        header ("location:..\pages\user-home.php?error=deleteWithFailure");
    exit();
    }else{
        header ("location:..\pages\user-home.php?error=deleteWithSuccess");
        exit();
    }

}