<?php

try {

    $dbh = new PDO("mysql:host=localhost;dbname=lopte;charset=utf8", "root", "");
    
} catch(PDOException $e) {

    echo "Konekcija neuspešna" .$e->getMessage();
}


if(isset($_POST['promenicenu']))
{
    $sifra = $_POST['sifra'];
    $cena = $_POST['cena'];
    try {

        $sql = "UPDATE loptetabela SET cena='$cena' WHERE sifra=$sifra";
        $stmt = $dbh->prepare($sql);      
        $exec = $dbh->beginTransaction(); 
        $exec = $stmt->execute(); 
        $dbh->commit();

        if($exec)
        {
            header('Location: promenaceneuspesna.php');   
        }
        else
        {
            echo 'Promena cene nije uspela.';
        }

        
    } catch(PDOException $e){
        $dbh->rollBack();
        echo $e->getMessage();
    }
}
?>