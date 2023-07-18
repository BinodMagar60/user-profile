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

//Step 4: save user to variables
$fullname=$_POST['fullname'];
$password=$_POST['password'];
$address=$_POST['address'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$id = $_GET['id'];


//step 5: setup insert SQL
$sql = "UPDATE `user` SET `fullname`='$fullname',`address`='$address',`password`='$password',`email`='$email',`contact`='$contact'  WHERE `uid`=$id ";


//step 6: run the sql to insert data into database

if($connect->query($sql)===TRUE)
{
    echo "Data Updated Sucessfully";
    header('Location:index.php');
    exit();

}
else
{
    echo "Error:".$connect->error;
}



?>