<?php
try{
    $access = new PDO("mysql:host=localhost;dbname=MARKETPLACE;charset=utf8","root","");
    $access->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
}
catch(PDOException $e){
     echo $e->getMessage();
}
?>