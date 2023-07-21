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


//step 4: save user to variables
$id = $_GET['id'];

//step 5: setup insert sql_regcase
$sql = "SELECT * FROM `user` WHERE  `uid` = $id";


//step 6: save exectable sql in a variable
$exesql = $connect->query($sql);

//step 7: execute the sql and save data in an variable.
$result =$exesql->fetch_assoc();

?>


<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            border: 0;
            box-sizing: border-box;
        }

       

        body {
            width: 100%;
            display: flex;
            justify-content: center;
            margin-top: 150px;
        }

        .heading {
            margin-top: 35px;
            font-size: 35px;
            margin-bottom: 35px;
        }


        .container {
            background-color: black;
            padding: 4px;
            height: fit-content;

        }

        .logo {
            margin-bottom: 40px;
        }

        .id-box {
            background-color: rgb(245, 245, 245);
            border-radius: 8px;
            display: flex;
            flex-direction: column;
            padding: 30px 40px;
            align-items: center;
        }


        .box i {
            font-size: 60px;
        }


        .box {
            background-color: rgb(196, 198, 200);
            border: 2px solid black;
            height: 100px;
            width: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .info {
            margin-top: 15px;
            display: flex;
            align-items: center;
            flex-direction: column;
            margin-bottom: 20px;
        }


        .info h2 {
            margin-bottom: 10px;
        }

        tr {
            height: 60px;

        }

        td{
            font-size: 25px;
        }

        td:nth-child(even){
            min-width: 280px;
        }
    </style>

<div class="container">
            <div class="id-box">
                <div class="heading">
                    <h2>ID Card</h2>
                </div>
                <div class="logo">
                    <div class="box"><i class="fa fa-solid fa-user" style="color: #000000;"></i></div>
                </div>
                <div class="info">
                    <div>
                        <h2>Details</h2>
                    </div>
                    <table>
                        <tr>
                            <td>Name: </td>
                            <td><?php echo $result['fullname'];?></td>
                        </tr>
                        <tr>
                            <td>Address: </td>
                            <td><?php echo $result['address'];?></td>
                        </tr>
                        <tr>
                            <td>Email: </td>
                            <td><?php echo $result['email'];?></td>
                        </tr>
                        <tr>
                            <td>Contact: </td>
                            <td><?php echo $result['contact'];?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>





