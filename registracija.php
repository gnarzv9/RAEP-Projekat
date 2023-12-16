<?php

    $mysqli=mysqli_connect("localhost", "root", "", "lopte");
    if($mysqli->connect_errno){
        echo "Neuspesno povezivanje na bazu.";
        exit();
    }

    $ime =  $_REQUEST['ime'];
    $prezime = $_REQUEST['prezime'];
    $email = $_REQUEST['email'];

    $sql = "INSERT INTO korisnici VALUES ('$ime', '$prezime','$email')";

    if(mysqli_query($mysqli, $sql)){
        echo '<script>alert("Nalog ubacen u bazu!")</script>';  
         
    } else{
        echo "Neuspesna kreacija naloga!". mysqli_error($mysqli);
    }
    
    mysqli_close($mysqli);
?>

<button id="Button" >Pretrazi Lopte</button>
<link rel="stylesheet" href="style.css">
<script>
    document.getElementById("Button").onclick = function () {
        location.href = "http://127.0.0.1/RAEP-Projekat/RAEP-Projekat/pretrazilopte.php";
    };
</script>

