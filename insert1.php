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
    $sql = "INSERT INTO student (name, roll, address) VALUES('rani','104','miraj)";

            if(mysqli_query($conn,$sql))
            {
                echo "new record inserted";
            }
            else
            {
                echo "not inserted data";
            }
?>