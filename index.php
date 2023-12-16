<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Pocetna</title>

    <script>
    
 /*   function hvala(){
    var ime1=document.poruka1.ime.value;
    alert("Hvala na poslatom komentaru, "+ime1+"!");
    return;
   }   

    function obrisiUnos() {
        document.getElementById("poruka1").reset();
    }*/

</script>
</head>
<body>
<div class="main">
    <div class="navbar">     
        <div class="logo-image">
            <img src="images/logo.png" alt="lopta logo">
        </div>   
        <ul>
        <a href="index.php"> <li> Početna </li> </a>
            <a href="pretrazilopte.php"> <li> Pretrazi Lopte </li> </a>
            <a href=""> <li> Odbojka </li> </a>
            <a href="dodajlopte.php"> <li> Dodaj lopte-Admin </li> </a>
        </ul>
    </div>

    <br><br><br><br><br><br><br><br>
    <h1>Dobrodošli u našu prodavnicu lopti!</h1>

        <form name="poruka1" id="poruka1" action="registracija.php" method="POST">

                <h3>Napravite nalog kako biste mogli da kupite loptu.</h3>
                <h4>Ime:</h4>
                <input type="text" name="ime" id="ime1">
                <h4>Prezime:</h4>
                <input type="text" name="prezime">
                <h4>Email:</h4>
                <input type="email" name="email">
                <br><br>
                <input type="submit" name="posalji" align="center" //onclick="hvala()" value="Pošalji">
                <input type="button" name="obrisi" align="center" //onclick="obrisiUnos()" value="Obriši">
                <br><br>
            </form>
</div>
</body>
</html>