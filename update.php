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

$sql="UPDATE student1 set name='ashish', roll='110', address='pune' where id= 1"; 

if(mysqli_query($conn,$sql))
{
    echo "RECORD UPDATED";
}
else{
    echo "ERROR NOT UPDATED";
}
?> 