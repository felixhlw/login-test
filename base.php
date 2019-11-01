<link rel="stylesheet" href="style.css">
<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=mydb"; //連接資料庫
$pdo=new PDO($dsn,'root','');  //以pdo型態連接
session_start();
?>