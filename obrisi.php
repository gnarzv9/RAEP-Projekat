<?php

try {

    $dbh = new PDO("mysql:host=localhost;dbname=lopte;charset=utf8", "root", "");
    
} catch(PDOException $e) {

    echo "Konekcija neuspešna" .$e->getMessage();
}


if(isset($_POST['obrisinalog']))
{
    $email = $_POST['email'];

    try {

        $sql = "DELETE FROM korisnici WHERE email=:email";
        $stmt = $dbh->prepare($sql);
        $exec = $stmt->execute(array(":email"=>$email));
        $exec = $dbh->beginTransaction(); 
        $exec = $stmt->execute(); 
        $dbh->commit();

        if($exec)
        {
            header('Location: brisanjeuspesno.php');   
        }
        else
        {
            echo 'Brisanje naloga nije uspelo.';
        }

        
    } catch(PDOException $e){
        $dbh->rollBack();
        echo $e->getMessage();
    }
}

?>