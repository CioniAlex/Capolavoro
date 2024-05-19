<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass="";
    $dbname="riviste1";
    $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    if(!$conn) echo "fail miserable";
    else{
        echo "";
    }
?>