<?php 


    $servername ="localhost";
    $username ="root";
    $password ="";
    $dbname ="bibliotheque";


    // creat connection  
    $conn = mysqli_connect($servername,$username,$password,$dbname);

    if(!$conn)
    {
        die("Connection Faiild : " . mysqli_connect_error());
    }

