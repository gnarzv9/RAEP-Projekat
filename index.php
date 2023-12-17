<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Početna</title>

</head>
<body>
<div class="main">
    <div class="navbar">     
        <div class="logo-image">
            <img src="images/logo.png" alt="lopta logo">
        </div>   
        <ul>
            <a href="index.php"> <li> Početna </li> </a>
            <a href="pretrazilopte.php"> <li> Pretraži Lopte </li> </a>       
            <a href="obrisinalog.php"> <li> Obriši nalog </li> </a>
            ADMIN
            <a href="promenicenu.php"> <li> Promeni cenu </li> </a>
            <a href="dodajlopte.php"> <li> Dodaj lopte-Admin </li> </a>
        </ul>
    </div>

    <br><br><br><br><br><br><br><br>
    <h1>Dobrodošli u našu prodavnicu lopti!</h1>

        <form id="forma1" action="registracija.php" method="POST">

                <h3>Napravite nalog kako biste mogli da kupite loptu.</h3>
                <h4>Ime:</h4>
                <input type="text" name="ime" id="ime1">
                <h4>Prezime:</h4>
                <input type="text" name="prezime">
                <h4>Email:</h4>
                <input type="email" name="email">
                <br><br>
                <input type="submit" name="posalji" align="center" value="Pošalji">
                <input type="reset" name="obrisi" align="center" value="Obriši">
                <br><br>
            </form>
</div>
</body>
</html>