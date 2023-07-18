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

//Step 4: save user to variables
$fullname=$_POST['fullname'];
$password=$_POST['password'];
$address=$_POST['address'];
$email=$_POST['email'];
$contact=$_POST['contact'];


// echo "$fullname";
// echo "$password";
// echo "$address";
// echo "$email";
// echo "$contact";

// step 5: setup insert SQL

    $sql ="INSERT INTO user (`fullname`,`password`,`address`,`email`,`contact`) VALUES ('$fullname','$password','$address','$email','$contact')";


//step 6: run the sql to insert database
if ($connect->query($sql) === TRUE)
{
    echo "Data Entered Sucessfully";
    ?>
    <br>
    <a href="index.php">User List</a>
    <?php
    header('Location:index.php');
    exit();
}
else {
    echo "Error:". $connect->error;
}

?>

