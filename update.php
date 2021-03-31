<?php
$host="localhost";
$user="root";
$pass="";
$db="nick";

$conn=mysqli_connect($host,$user,$pass,$db);
if(!$conn)
{
    die("conn failed");
}
echo "connection successfull<hr>";

$sql="UPDATE student1 set name='Aniket', roll='161', address='miraj' where id= 1"; 

if(mysqli_query($conn,$sql))
{
    echo "RECORD UPDATED";
}
else{
    echo "ERROR NOT UPDATED";
}
?> 