<?php

    $mysqli=mysqli_connect("localhost", "root", "", "lopte");
    if($mysqli->connect_errno){
        echo "Neuspesno povezivanje na bazu.";
        exit();
    }

    $sifra =  $_REQUEST['sifra'];
    $brend = $_REQUEST['brend'];
    $naziv = $_REQUEST['naziv'];
    $cena = $_REQUEST['cena'];
    $sport = $_REQUEST['sport'];

    $sql = "INSERT INTO loptetabela VALUES ('$sifra', '$brend','$naziv','$cena','$sport')";

    if(mysqli_query($mysqli, $sql)){
        header('Location: loptauspesna.php');
    } else{
        echo "Neuspesan dodatak lopte!". mysqli_error($mysqli);
    }
    
    mysqli_close($mysqli);
?>

<link rel="stylesheet" href="style.css">

