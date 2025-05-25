<?php
$username = "root";
$password = "";
$host = "localhost";
$database = "porto_dpk";

return new PDO("mysql:host=$host; dbname=porto_dpk", $username, $password);