<?php 

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


if(!empty($validator->getErrors())){
    var_dump($validator->getErrors());
}



