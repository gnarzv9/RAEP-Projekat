<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Promena cene</title>

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
    <h1>Promenite cenu lopte!</h1>

    <form id="forma1" action="promena.php" method="POST">

                <h3>Unesite sifru lopte i njenu novu cenu.</h3>
                <h4>Sifra:</h4>
                <input type="sifra" name="sifra">
                <br><br>
                <h4>Nova cena:</h4>
                <input type="cena" name="cena">
                <br><br>
                <button type="submit" name="promenicenu" value="Promeni cenu">Promeni cenu</button>
                <br><br>
    </form>

</div>
</body>
</html>