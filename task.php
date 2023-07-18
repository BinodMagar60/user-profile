<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
        .table1{
            margin-top: 3%;
            display: flex;
            justify-content: center;
        }


        .table1 table{
            text-align: center; 
            font-size: 25px;
            
        }
       
       .table1 table, .table1 td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px 10px;
            align-items: center;
        }



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
            font-size: 22px;
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
        .button1 button{
            
            background-color: rgb(34, 219, 34);
            color: rgb(255, 255, 255);
            font-size: 25px;
            height: 50px;
            width: 430px;
            font-weight: bold;
            border-radius: 10px;
            margin-left: 20px;
            cursor: pointer;
            margin-bottom: 5%;
            transition: all 300ms;
        }
        .button1 button:hover{
            background-color: rgba(34, 219, 34, 0.5);
            
        }
        

    </style>

</head>
<body>

    <div class="table1">
        <table>
            <tr style="font-weight: bold; background-color: lightblue">
            <td>S.N.</td>   
            <td >Name</td>
                <td>Address</td>
                <td>Email</td>
                <td>Contact</td>
                <td colspan="3">Action</td>
            </tr>
            <tr style="background-color: lightcyan;">
                <td>1</td>
                <td>Hari</td>
                <td>Bharatpur-10</td>
                <td>example@gmail.com</td>
                <td>9800000000</td>
                <td>Show</td>
                <td>Edit</td>
                <td style="background-color: rgb(252, 62, 62); color: rgb(230, 228, 228);">Delete</td>
            </tr>
            <tr style="background-color: lightcyan;">
                <td>2</td>
                <td>Ram</td>
                <td>Bharatpur-10</td>
                <td>example@gmail.com</td>
                <td>9800000000</td>
                <td>Show</td>
                <td>Edit</td>
                <td style="background-color: rgb(252, 62, 62); color: rgb(230, 228, 228);">Delete</td>
            </tr>
        </table>
    
    </div>
 


    <div class="form1">
        
    <fieldset>
        <legend>Form</legend>
        <form>
            <div class="table2">
                <table>
                    <tr>
                        <td>Full Name:</td>
                        <td><input type="text"></td>
                    </tr>
                    <tr>
                        <td>Address:</td>
                        <td><input type="text"></td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td><input type="email"></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type="password"></td>
                    </tr>
                    <tr>
                        <td>Contact:</td>
                        <td><input type="number" min="9000000000" max="9999999999"></td>
                    </tr>
                </table>
            </div>    
            <div class="button1"><button>Submit</button></div>
        </form>
        
    </fieldset>

    </div>


</body>
</html>