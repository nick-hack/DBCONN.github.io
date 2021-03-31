<?php
$server="localhost";
$user="root";
$pass="";

$conn=mysqli_connect($server,$user,$pass);

if(!$conn)
{
    die("connection failed");
}
echo "Connection successfull <br>";

$sql="DROP DATABASE nick";
if(mysqli_query($conn,$sql))
{
    echo "Database Deleted";
}
else
{
    echo "Database not Deleted";
}
?>