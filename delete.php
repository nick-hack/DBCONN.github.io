<?php
$host="localhost";
$user="root";
$pass="";
$db="new1";

$conn=mysqli_connect($host,$user,$pass,$db);
if(!$conn)
{
    die("conn failed");
}
echo "connection successfull<hr>";

$sql="DELETE FROM `student1` WHERE `student1`.`id` = 15";

if(mysqli_query($conn,$sql))
{
    echo "RECORD DELETED";
}
else{
    echo "ERROR NOT DELETED";
}
?> 