<?php 
$database = "web"; 
$host = "localhost";
$user = "NAI";
$password = "NAI14";

$mysql = new mysqli($host, $username, $password, $database);

// Check connection
if ($mysql -> connect_errno) {
    echo "Failed to connect to MySQL : " . $mysqli -> connect_error;
    exit;
}
?>