<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dodaj lopte</title>
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
            <a href="dodajlopte.php"> <li> Dodaj lopte </li> </a>
        </ul>
    </div>

    <br><br><br><br><br><br><br><br>
    <h1>Unesite podatke kako biste dodali loptu.</h1>

        <form id="forma1" action="dodaj.php" method="POST">
     
                <h4>Sifra:</h4>
                <input type="text" name="sifra">
                <h4>Brend:</h4>
                <input type="text" name="brend">
                <h4>Naziv:</h4>
                <input type="text" name="naziv">
                <h4>Cena:</h4>
                <input type="text" name="cena">
                <h4>Sport:</h4>
                <input type="text" name="sport">
                <br><br>
                <input type="submit" name="posalji" align="center" value="Pošalji">
                <input type="reset" name="obrisi" align="center" value="Obriši">
                <br><br>
            </form>
</div>
</body>
</html>