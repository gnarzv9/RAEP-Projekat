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
    <h1>Pretrazi loptu po njenom brendu.</h1>
    <h3>Imamo:</h3>
    <h2>Fudbal:Nike, Adidas, Mikasa</h2>
    <h2>Kosarka:Molten, Nike, Spalding</h2>
    <h2>Odbojka:Mikasa, Allsix</h2>
        <form name="poruka1" id="forma1" method="POST">
     
                <h4>Naziv:</h4>
                <input type="text" name="brend">
                <br><br>
                <input type="submit" name="posalji" align="center" value="Pretraži">
                <input type="button" name="obrisi" align="center" value="Obriši">
                <br><br>
         </form>

            <?php
                $mysqli=mysqli_connect("localhost", "root", "", "lopte");

                if(isset($_POST['posalji']))
                {
                    $brend=$_POST['brend'];

                    $sql="SELECT * FROM loptetabela WHERE brend='$brend'";
                    $sql_run = mysqli_query($mysqli,$sql);

                    while($row=mysqli_fetch_array($sql_run)){

                       ?>
                        <form id="forma2" method="POST">
                            <input type="text" name="sifra" value="<?php echo $row['sifra']?>">
                            <input type="text" name="brend" value="<?php echo $row['brend']?>">
                            <input type="text" name="naziv" value="<?php echo $row['naziv']?>">
                            <input type="text" name="cena" value="<?php echo $row['cena']?>">
                            <input type="text" name="sport" value="<?php echo $row['sport']?>">
                        </form>
                        <br><br>
                        <?php 
                    }
                }
            ?>
</div>
</body>
</html>