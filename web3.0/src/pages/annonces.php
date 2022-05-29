<!DOCTYPE HTML>
<html>

<head>
    <meta charset="UTF-8">
    <title>Annonce</title>
    <link href="../assets/Css/styleannonce.css" rel="stylesheet">
    <link href="../assets//Css//bootstrap.css" rel="stylesheet">
</head>

<?php
    require("../assets/php/commande.php");
     include("../assets/php/connexion.php");
     $link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $id_produit = explode("/?",$link)[1];
    $Produit = afficherById($id_produit);

    ?>


<body>


    <?php foreach($Produit as $produit): ?>
    <h1><?= $produit->nom; ?> <strong style="color:brown;"><?= $produit->prix;?> DH </strong></h1>
    <div class="produit">
        <div class="produit-small-img">
            <img src="<?= $produit->image;?>" alt="">
            <img src="<?= $produit->image2;?>" alt="">
            <img src="<?= $produit->image3;?>" alt="">
            <img src="<?= $produit->image4;?>" alt="">
        </div>
    </div>
    <ul>

        <li> <strong style="font-size:x-large;color:darkgreen;">Modele</strong><br />
            <p><?= $produit->modele;?></p>
        </li>
        <li> <strong style="font-size:x-large;color:darkgreen;">Annew odele</strong><br />
            <p><?= $produit->anneemodele;?></p>
        </li>
        <li> <strong style="font-size:x-large;color:darkgreen;">Carburat</strong><br />
            <p><?= $produit->Carburant;?></p>
        </li>
        <li> <strong style="font-size:x-large;color:darkgreen;">Discription</strong><br />
            <p><?= $produit->description;?></p>
        </li>
    </ul>

    <?php endforeach ?>
    <a href="mailto:supercars@gmai.com"><button class="btn btn-outline-success">Envoyer un messages</button></a>
    <h4>Tel <strong>0505120510 </strong></h4>

</body>

</html>