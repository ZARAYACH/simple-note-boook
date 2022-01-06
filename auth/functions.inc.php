<?php

function EmptyInput($username,$firstname,$lastname,$email,$pwd,$pwd_repeat){
    $result = false;
    if(empty($username) || empty($firstname)|| empty($lastname) || empty($email)|| empty($pwd) || empty($pwd_repeat)){
        $result = true;
    }
    return $result; 
}
function ValidateEmail($email){
    $result = false;
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true ;
    }  
    return $result;
}

function ValidatePwd($pwd,$pwd_repeat){
    $result = false;
    if($pwd == $pwd_repeat ){
        $result = true ;
    }  
    return $result;
}
function ValidateUserName($username){
    $result = false;
    $user_file_name = "../users/".$username.".txt";
    if (file_exists($user_file_name) == true){
        $result = true ;
    }  
    return $result;
}
function ValidateFirstName($firstname){
    $result = true;
    if (!preg_match('/[^A-Za-z0-9]/', $firstname)){
        $result = false ;
    }  
    return $result;
}function ValidateLastName($lastname){
    $result = true;
    if (!preg_match('/[^A-Za-z0-9]/', $lastname)){
        $result = false ;
    }  
    return $result;
}

