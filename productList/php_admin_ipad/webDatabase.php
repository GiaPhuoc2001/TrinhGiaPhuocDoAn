<?php
    $serverName="localhost"; //127.0.1
    $username='root';
    $pwd="";
    $dbname="database_banhang";

    $conn=mysqli_connect($serverName,$username,$pwd,$dbname);
    if ($conn ){
     
    }else{
        echo "ket noi database that bai";
    }
?>