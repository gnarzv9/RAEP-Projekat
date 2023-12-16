<?php
    $mysqli = new mysqli("localhost", "root", "", "lopte");
    if($mysqli->connect_errno){
        echo "Neuspesno povezivanje na bazu.";
        exit();
    }
?>