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
    $sql = "INSERT INTO student (name, roll, address) VALUES('Aniket','161','miraj)";

            if(mysqli_query($conn,$sql))
            {
                echo "new record inserted";
            }
            else
            {
                echo "not inserted data";
            }
?>