<?php
//Step 1: server and db details
$server = "localhost";
$database = "indreni";
$user = "root";
$password = "";

//Step 2: connection instance in a varible
$connect = new mysqli($server,$user,$password,$database);

//Step 3: check the connection
if ($connect->connect_error)
{
    die("Connection failed: ");
}
else
{
    // echo"connected!";
}


//step 4: save user to variables
$id = $_GET['id'];

//step 5: setup insert SQL
$sql ="DELETE from `user` where `uid`=$id";



//step 6: run the sql to insert database
if ($connect->query($sql) === TRUE)
{
    header('Location:index.php');
    exit();
}
else {
    echo "Error:". $connect->error;
}







?>