<?php

header('Access-Control-Allow-Origin: *'); 
    header("Access-Control-Allow-Credentials: true");
    header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
    header('Access-Control-Max-Age: 1000');
    header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token , Authorization');


$DB_HOST = "localhost";
$DB_USER = "root";
$DB_PASS = "";
$DB_NAME = "crud";


$conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
   else{ 
    echo "Succedfull";
   }
    mysqli_close($conn);
    
    ?>
