<?php
session_start();

if(isset($_POST["titre"])){
    $title=$_POST["titre"];
    $username=$_SESSION['username'];
    $note_path="../note_user/$username#$title.txt";
    $fp = fopen($note_path,"w");
    fwrite($fp,$_POST['note']);
    fclose($fp);
    if(file_exists($note_path)){
      header ("location:..\pages\user-home.php?saved=True");
      exit();
    }else{
        header ("location:..\pages\user-home.php?saved=False");
        exit();
    }
  }else{
    header ("location:..\pages\user-home.php?saved=SOMESHITWENRWRONG");
        exit();

  }