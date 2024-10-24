<?php
session_start();
$servername="localhost";
$username ="root";
$password = "";
$dbname ="login";

$conn = mysqli_connect($servername,$username,$password,$dbname) or die('Error Connection!!!');

?>