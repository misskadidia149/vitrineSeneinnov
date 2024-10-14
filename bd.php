<?php

$con=mysqli_connect("localhost","root","","seneinnov");

// $con=
// mysqli_connect( $hostname = 'localhost', $username = 'root', $password = '', $database = 'crud');
if(!$con){
    die('connection failed'.mysqli_connect_error());
}


?>