<?php
    $host="localhost";
    $user="root";
    $pass="";
    $db="Anik";

    $conn=mysqli_connect($host,$user,$pass,$db);
    if(!$conn)
    {
        die("conn failed");
    }
    echo "connection successfull<hr>";
    $sql = "INSERT INTO student (name, roll, address) VALUES ('Abhishek','160','Bhose'),('Aniket','161','Miraj'),
    ('Harshad','159','Deshing'),('Pratik','163','Bedag'),('Abhi','164','Jununi')";

            if(mysqli_query($conn,$sql))
            {
                echo "new record inserted";
            }
            else
            {
                echo "not inserted data";
            }
?>