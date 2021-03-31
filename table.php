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

$sql="CREATE TABLE student1 (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    roll INT,
    address TEXT
)";
if(mysqli_query($conn,$sql))
{
    echo "Table created";
}
else
{
    echo "table not created";
}
?>