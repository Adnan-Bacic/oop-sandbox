<?php
class User{
    public $name;
    public $age;
    public static $minPassLength = 6;

    public static function validatePass($pass){
        if(strlen($pass) >= self::$minPassLength){
            return true;
        } else {
            return false;
        }
    }
}

$password = '12345';
if(User::validatePass($password)){
    echo 'password valid';
} else {
    echo 'password not valid';
}