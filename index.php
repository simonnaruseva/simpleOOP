<?php


use Data\Student;
use Data\User;

spl_autoload_register();

try {
    $username = readline();
    $password = readline();
    $firstName = readline();
    $lastName = readline();

    $user = new User($username, $password, $firstName, $lastName);
    $student = new Student($username,$password,$firstName,$lastName,'2',4);
    echo $student;

} catch (Exception $e)
{
    echo $e->getMessage();
}