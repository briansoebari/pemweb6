<?php
$servername="localhost";
$username="root";
$password="";
$dbname="mydb";

// Create Connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check Connection
if(!$conn){
    die("Connection Failed: ". mysqli_connect_error());
}

// Create Record
$sql= "INSERT INTO liga(kode, negara, champion)
VALUES ('Eng', 'English', '3')";
if(mysqli_query($conn, $sql)){
    echo "New record created succesfully";
} else{
    echo "Error: ". $sql ."<br>". mysqli_error($conn);
}
-
mysqli_close($conn);
?>