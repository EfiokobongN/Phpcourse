<?php
$dbHost = "localhost"; // connecting to database
$dbUser = "root";
$dbPass = "";
$dbName = "phplearning";

//connection to database
$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if ($conn){

}else{
    die('Database connection failed!');
}
?>