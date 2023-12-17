<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Obriši nalog</title>

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
    <h1>Brisanje naloga</h1>

        <form id="forma1" action="obrisi.php" method="POST">

                <h3>Unesite vaš email kako biste obrisali nalog.</h3>
                <h4>Email:</h4>
                <input type="email" name="email">
                <br><br>
                <button type="submit" name="obrisinalog" value="Obriši nalog">Obriši nalog</button>
                <br><br>
            </form>
</div>
</body>
</html>