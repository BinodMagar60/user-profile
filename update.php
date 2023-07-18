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


<style>
    .form1{
            display: flex;
            justify-content: center;
            margin-top: 4%;
        }


        fieldset{
            background-color: antiquewhite;
            margin-top: 50px;
            font-size: 30px;
            width: 40%;
            border: 2px solid black;
            border-radius: 8px;
        }

        legend{
            font-weight: bold;
        }

        .form1 form {
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-top: 5%;
        
        }
        
        .form1 form tr td{
            padding-bottom: 8%;
        }

        form table tr td input{
            width: 100%;
            font-size: 20px;
            outline: none;
            height: 35px;
            margin-left: 3%;
            padding: 0 5px;
            border: none;
            border-left: 1px solid rgb(155, 154, 154);
            border-bottom: 2px solid rgb(155, 154, 154);
            box-shadow: 5px 5px 10px rgb(117, 112, 112);

        }

        .button1{
            width: 100%;
            display: flex;
            justify-content: center;
            
        }
        .button1 input{
            
            background-color: rgb(34, 219, 34);
            color: rgb(255, 255, 255);
            font-size: 25px;
            height: 50px;
            width: 50%;
            font-weight: bold;
            border-radius: 10px;
            margin-left: 20px;
            cursor: pointer;
            margin-bottom: 5%;
            transition: all 300ms;
        }
        .button1 input:hover{
            background-color: rgba(34, 219, 34, 0.5);
            
        }
</style>



<div  class="form1" >
        
        <fieldset>
            <legend>Form</legend>
            <form action="processupdate.php?id=<?php echo $result['uid'];?>" method="POST">
                <div class="table2">
                    <table>
                        <tr>
                            <td>Full Name:</td>
                            <td><input type="text" value="<?php echo $result['fullname'];?>" name="fullname"></td>
                        </tr>
                        <tr>
                            <td>Address:</td>
                            <td><input type="text" value="<?php echo $result['address'];?>" name="address"></td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td><input type="email" value="<?php echo $result['email'];?>" name="email"></td>
                        </tr>
                        <tr>
                            <td>Password:</td>
                            <td><input type="password" value="<?php echo $result['password'];?>" name="password"></td>
                        </tr>
                        <tr>
                            <td>Contact:</td>
                            <td><input type="number" value="<?php echo $result['contact'];?>" name="contact" ></td>
                        </tr>
                    </table>
                </div>    
                <div class="button1"><input type="submit" name="submit" value="Update"></div>

            </form>
            
        </fieldset>
    
        </div>



