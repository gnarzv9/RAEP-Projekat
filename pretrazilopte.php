<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Pretrazi lopte</title>
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
    <h1>Pretrazi loptu po nazivu.</h1>

        <form method="POST">
     
                <h4>Naziv:</h4>
                <input type="text" name="naziv">
                <br><br>
                <input type="submit" name="posalji" align="center" value="Pretraži">
                <input type="button" name="obrisi" align="center" value="Obriši">
                <br><br>
            </form>

            <?php
                if(isset($_POST['naziv'])){
                    require "pretrazi.php";
                    if(count($rez)>0){
                        foreach($rez as $r){
                            echo "<div>" . $r['naziv'] . " - " . $r['sifra'] . "</div>";
                            }
                        }else{
                            echo"Ne postoji lopta sa ovim nazivom.";
                        }
                    }
                
            ?>
</div>
</body>
</html>