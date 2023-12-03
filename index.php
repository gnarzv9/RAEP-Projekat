<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Početna</title>

    <script>
    
    function hvala(){
    var ime1=document.poruka1.ime.value;
    alert("Hvala na poslatom komentaru, "+ime1+"!");
    return;
   }   

    function obrisiUnos() {
        document.getElementById("poruka1").reset();
    }

</script>
</head>
<body>
<div class="main">
    <div class="navbar">     
        <div class="logo-image">
            <img src="images/logo.png" alt="lopta logo">
        </div>   
        <ul>
            <a href=""> <li> Početna </li> </a>
            <a href=""> <li> Fudbal </li> </a>
            <a href=""> <li> Odbojka </li> </a>
            <a href=""> <li> Košarka </li> </a>
        </ul>
    </div>

    <br><br><br><br><br><br><br><br>
    <h1>Dobrodošli u našu prodavnicu lopti!</h1>

        <form name="poruka1" id="poruka1" action="" method="POST">

                <h3>Napravite nalog kako biste mogli da kupite loptu.</h3>
                <h4>Ime i Prezime:</h4>
                <input type="text" name="ime" id="ime1">
                <h4>Email:</h4>
                <input type="email" name="email">
                <br><br>
                <input type="submit" name="posalji" align="center" //onclick="hvala()" value="Pošalji">
                <input type="button" name="obrisi" align="center" onclick="obrisiUnos()" value="Obriši">
                <br><br>
            </form>

            <?php
                $poruka = "";
                if($poruka) {
                    echo $poruka; 
                }
            ?>


</body>
<?php

if(isset($_POST['posalji'])){   
    if(ctype_alpha($_POST['ime'])){
        $ime = $_POST['ime'];
    }
    else{
        $poruka = "Ime i prezime se mogu sastojati samo iz slova!";
    }
    //if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
   //     $email = $_POST['email'];
   // }
    //else{
    //    $poruka= "Niste uneli validnu email adresu!";
    //}
}
    

?>


</div>
</body>
</html>