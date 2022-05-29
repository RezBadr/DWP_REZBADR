<?php
try{
    $pdo = new PDO("mysql:host=localhost;dbname=login_database","root","");
    $pdo2 = new PDO("mysql:host=localhost;dbname=MARKETPLACE","root","");
}
catch(PDOException $e){
     echo $e->getMessage();
}
?>