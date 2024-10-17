<?php 
session_start();
require_once 'Session.php';
require_once 'Validation.php';

$validator = new Validation();

$validator->validate(
    [
        "name" => ["required","string","max:10"],
        "email" => ["required"],
        "phone" => ["required","numeric"],
        "password" => ["required","string","min:10"],
    ]
);


if($validator->getErrors()){
    
}else{
    Session::set("success","Data Inserted Successfully");
}

header("Location: index.php");
die;


