<?php
session_start();

if(!empty($_POST["titre"]) and !empty($_POST['note'])){
    $title=$_POST["titre"];
    $username=$_SESSION['username'];
    $note_path="../note_user/$username#$title.txt";
    $fp = fopen($note_path,"w");
    if($fp!=false){
      fwrite($fp,$_POST['note']);
    fclose($fp);
    if(file_exists($note_path)){
      header ("location:..\pages\user-home.php?saved=True");
      exit();
    }else{
        header ("location:..\pages\user-home.php?saved=nope");
        exit();
    }
  }else{
    header ("location:..\pages\user-home.php?saved=changeTItre");
        exit();

  }
    }
    else
    {
      header ("location:..\pages\user-home.php?saved=imptyinput");
          exit();
  
    }