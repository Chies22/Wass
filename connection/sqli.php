<?php
$servername="localhost";
$user_name="root";
$password="";
$dbb_name= "Freight";

//create connection
$conn = new mysqli($servername, $user_name,$password,$dbb_name);
if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
    }
    echo("Connected successfully");
?>