<?php
$servername="localhost";
$username="root";
$password="";

// Create Connection
$conn = mysqli_connect($servername, $username, $password)
    ;

// Check Connection
if(!$conn){
    die("Connection Failed: ". mysqli_connect_error());
}

// Create Database
$sql= "CREATE DATABASE myDB";
if(mysqli_query($conn, $sql)){
    echo "Database created succesfully";
} else{
    echo "Error creating database". mysqli_error($conn);
}

mysqli_close($conn);
?>