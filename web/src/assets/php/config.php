<?php  
$server = "localhost";
$nom_utilisateur = "root";
$password ="";
$database ="login_database";

$conn = mysqli_connect($server,$nom_utilisateur,$password,$database);
if(!$conn){
    echo "<script>alert('connecetion fail')</script>";
}
?>
