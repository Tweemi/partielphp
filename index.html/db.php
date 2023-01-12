<?php

$server = "localhost";
$user = "root";
$pass = "root";
$database = "partielphp";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
      die("erreur");

}

   
?>