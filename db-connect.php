<?php
$host     = 'localhost';
$username = 'root';
$password = '';
$dbname   ='js_logistica';

$conn = new mysqli($host, $username, $password, $dbname);
if(!$conn){
    die("Cannot connect to the database.". $conn->error);
}