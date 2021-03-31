<?php
$host="localhost";
$user="root";
$pass="";

$conn=mysqli_connect($host,$user,$pass);
if(!$conn)
{
    die("conn failed");
}
echo "connection successfull<hr>";

$sql="CREATE DATABASE new1";
if(mysqli_query($conn,$sql))
{
    echo "Database created";
}
else
{
    echo "unable to created database<br>";
}
?>