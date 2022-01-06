<?php
if (isset($_POST['username']))
{
    $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
    $firstname = filter_var( $_POST['First-name'], FILTER_SANITIZE_STRING);
    $lastname =filter_var($_POST['Last-name'], FILTER_SANITIZE_STRING); 
    $email =filter_var( $_POST['email'], FILTER_SANITIZE_STRING);
    $pwd =filter_var( $_POST['password'], FILTER_SANITIZE_STRING);
    $pwd_repeat =filter_var( $_POST['password-repeat'], FILTER_SANITIZE_STRING); 
}
else
{
    header ("location:..\pages\signup.php?error=wrongway");
    exit();
}
require_once '..\auth\functions.inc.php';

if(EmptyInput($username,$firstname,$lastname,$email,$pwd,$pwd_repeat)===true)
{
    header ("location:..\pages\signup.php?error=imptyinput");
    exit();
}
// we will validate the email later
if(ValidateEmail($email)===false)
{
    header ("location:..\pages\signup.php?error=Wrongemail");
    exit();
}


if(ValidatePwd($pwd,$pwd_repeat)===false)
{
    header ("location:..\pages\signup.php?error=Unmatchedpassword");
    exit();

}
if(ValidateUserName($username)===true)
{
    header ("location:..\pages\signup.php?error=userexists");
    exit();

}

$user = fopen("../users/$username.txt","w");
$user_credientiels = $username ."§".$pwd."§".$email."§".$lastname."§".$firstname;
fwrite($user,$user_credientiels);
fclose($user);

if(file_exists("../users/$username.txt")==false){
        
    header ("location:..\pages\signup.php?error=somethingwentwrong");
    exit();
}else{
    header ("location:..\pages\signup.php?error=signupsucced");
    exit();

}

