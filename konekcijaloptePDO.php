<?php
try{ 
    $pdo=new PDO("mysql:host=localhost;dbname=lopte", "root", "");
    echo "Konekcija je uspesna!";
}
catch(PDOException $e){
    echo $e->getMessage();
}
?>