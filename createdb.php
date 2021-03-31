<?php
$host="localhost";
$user="root";
$pass="";

$conn=mysqli_connect($host,$user,$pass);
    if(!$conn)
    {
        die("connection failed");
    }
    echo "connection successfull <br>";

$sql= "CREATE DATABASE newdb";
if(mysqli_query($conn,$sql))
{
    echo "DATABASE Created";
}
else
{
    echo "DATABASE Not Created";
}

?>