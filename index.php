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

//Step 4: setup insert sql_regcase
$sql = "SELECT * FROM `user`";

//Step 5: save executable sql in a variable
$exesql = $connect->query($sql);





?>
<style>
    table tr td{
        padding: 5px 10px;
    }
</style>



<table border=1 style="border-collapse:collapse; font-size: 20px; text-align: center;">
    <tr>
        <th>S.N.</th>
        <th>FullName</th>
        <th>Address</th>
        <th>Email</th>
        <th>Contact</th>
        <th colspan="3">Actions</th>
    </tr>


<?php
while($result = $exesql->fetch_assoc())
{

?>

<tr>
    <td><?php echo $result['uid']; ?></td>
    <td><?php echo $result['fullname']; ?></td>
    <td><?php echo $result['address']; ?></td>
    <td><?php echo $result['email']; ?></td>
    <td><?php echo $result['contact']; ?></td>
    <td><a href="show.php?id=<?php echo $result['uid']; ?>">Show</a></td>
    <td><a href="update.php?id=<?php echo $result['uid']; ?>">Edit</a></td>
    <td><a href="processdelete.php?id=<?php echo $result['uid']; ?>">Delete</a></td>
    
</tr>

<?php
}
?>

</table>
<a href="create.php">Create New Users</a>