<?php

$conn = mysqli_connect('localhost', 'root', 'password', 'Prison_Management_System');

if($conn){
    echo 'Connected';
}
else{
    die("Connection failed: " . mysqli_connect_error());

}

?>