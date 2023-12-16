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
        echo '<script>alert("Lopta ubacena u bazu!")</script>';  
         
    } else{
        echo "Neuspesan dodatak lopte!". mysqli_error($mysqli);
    }
    
    mysqli_close($mysqli);
?>

<link rel="stylesheet" href="style.css">
<button id="Button" >Pretrazi Lopte</button>
<script>
    document.getElementById("Button").onclick = function () {
        location.href = "http://127.0.0.1/RAEP-Projekat/RAEP-Projekat/pretrazilopte.php";
    };
</script>

<button id="Button2" >Dodaj jos lopti</button>
<script>
    document.getElementById("Button2").onclick = function () {
        location.href = "http://127.0.0.1/RAEP-Projekat/RAEP-Projekat/dodajlopte.php";
    };
</script>

