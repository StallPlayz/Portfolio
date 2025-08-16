<?php 
$username = "root";
$password = "";
$host = "localhost";

return new PDO("mysql:host=$host; dbname=porto", $username, $password);