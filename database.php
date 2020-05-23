<?php
    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "projectdatabase";
    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
    
    if(!$conn)
    {        die('Could not connect MySql:'.mysql_error());
    }       
?>