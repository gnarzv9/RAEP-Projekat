<?php

$dbh = new PDO("mysql:host=localhost;dbname=lopte;charset=utf8", "root", "");


$stmt=$dbh->prepare("SELECT * FROM `loptetabela` WHERE `naziv` LIKE ? OR `brend` LIKE ? ");
$stmt->execute([
    "%".$_POST['naziv']."%", "%".$_POST['naziv']."%"
]);
$rez = $stmt->fetchAll();
?>