<?php
session_start();

//include 'include/database.php';

if(isset($_POST['register']))
$name = $_POST['name'];
$usernsme = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

echo $name;
echo $usernsme;
echo $email;
echo $password;



?>