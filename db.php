<?php
/*
//$dns = "mysql:host=localhost:8888;dbname=my_db;port=3306;";
$dns = "mysql:unix_socket=/Applications/MAMP/tmp/mysql/mysql.sock;dbname=blog_db;";
$user = "root";
$password = "root";

$db = new PDO($dns, $user, $password);
$db->exec("set names utf8");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
*/

$db = mysqli_connect("localhost", "root", "root", "blog_db")
?>