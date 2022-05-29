<?php 
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Clients</title>

    <link href="../assets//Css//dashboard.css" rel="stylesheet">
    <link href="../assets//Css//bootstrap.css" rel="stylesheet">
    <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
    </style>
</head>

<body>

    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">
            <span class="fs-4">
                <?php 
        echo " Welcom " . $_SESSION['username'];
        ?>
            </span>
        </a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <a class="nav-link px-3" href="logout.php">Sign out</a>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="Employe.php">
                                <span data-feather="home"></span>
                                Acceil
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Orders.php">
                                <span data-feather="Orders"></span>
                                Orders
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="Produits.php">
                                <span data-feather="Produits"></span>
                                Produits
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="TachesCompletes.php" class="nav-link">
                                <span data-feather=" taches_Completes"></span>
                                Les taches Completes
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="clients.php" class="nav-link">
                                <span data-feather="users"></span>
                                Clients
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <?php
        require("../assets/php/commande.php");
        if(isset($_POST['valider'])){
          $image=htmlspecialchars (strip_tags ($_POST['image']));
          $image2=htmlspecialchars (strip_tags ($_POST['image2']));
          $image3=htmlspecialchars (strip_tags ($_POST['image3']));
          $image4=htmlspecialchars (strip_tags ($_POST['image4']));
          $marque=htmlspecialchars(strip_tags($_POST['marque']));
          $prix=htmlspecialchars(strip_tags($_POST['prix']));
          $desc=htmlspecialchars(strip_tags($_POST['desc'])); 
          $categorie=htmlspecialchars(strip_tags($_POST['categorie'])); 
          $ville=htmlspecialchars(strip_tags($_POST['Ville']));
          $car=htmlspecialchars(strip_tags($_POST['Carburant']));
          $modele=htmlspecialchars(strip_tags($_POST['modele']));
          $anneemodele=htmlspecialchars(strip_tags($_POST['anneemodele']));
          $PF=htmlspecialchars(strip_tags($_POST['PF']));
          try{
          ajouter($marque,$image,$image2,$image3,$image4,$prix,$desc,$categorie,$ville,$car,$modele,$anneemodele,$PF);
          echo "<script>alert('Tache complete')</script>";
          }catch(Exception $e){
               $e->getMessage();
          }
      }
        ?>

                <div class="container" style="padding:20px;">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="listeProduits-tab" data-bs-toggle="tab"
                                data-bs-target="#listeProduits" type="button" role="tab" aria-controls="listeProduits"
                                aria-selected="true">Liste des produits</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="AjouterVoiture-tab" data-bs-toggle="tab"
                                data-bs-target="#AjouterVoiture" type="button" role="tab" aria-controls="AjouterVoiture"
                                aria-selected="false">Ajouter une voiture ou moto</button>
                        </li>

                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <!-- liste de Produits -->
                        <div class="tab-pane fade show active" id="listeProduits" role="tabpanel"
                            aria-labelledby="listeProduits-tab">

                            <?php
                                         require("../assets/php/connexion.php");
                                   $req = $pdo2->query("SELECT * FROM produits");
                                 echo '<ul class="list-group">';
                                  while($ligne = $req->fetch()){
                                echo '<li class="list-group-item">';
                                    echo $ligne['id_produit']." - ".$ligne['categorie']." - ".$ligne['nom']." - ".$ligne['Ville']." - ".$ligne['anneemodele'];
                                echo '</li>';
                                 }
                                   echo '</ul>';
                                ?>
                            <div>
                                <?php
                               @$id_produit = $_POST["id_produit"];
                               @$Supprimer = $_POST["Supprimer"];
                               if (isset($Supprimer)){
                               include("../assets/php/connexion.php");
                                      $req =  $pdo2->prepare("DELETE FROM produits WHERE  id_produit = ? ");
                                      $req->execute(array($id_produit));
                                       echo "<script>alert('Produit  est supprimer')</script>";
                                  }
                                 ?>
                                <form action="" method="POST" class="row g-3"
                                    style="justify-content:center;margin:auto;">
                                    <div class="col-auto">
                                        <label for="id" class="visually-hidden">Numero de produit</label>
                                        <input type="number" class="form-control" name="id_produit" required>
                                    </div>
                                    <div class="col-auto">
                                        <button type="submit" class="btn btn-danger mb-3"
                                            name="Supprimer">Supprimer</button>
                                    </div>
                                </form>
                            </div>

                        </div>

                        <!--Ajouter une voiture ou motos-->
                        <div class="tab-pane fade" id="AjouterVoiture" role="tabpanel"
                            aria-labelledby="AjouterVoiture-tab">
                            <form action="" method="POST">
                                <div
                                    style=" border: 2px #000 solid; border-radius:10px; margin-top:15px;padding:10px;background-color:brown;">

                                    <div class="row g-3" style="justify-content:center;margin:auto">
                                        <div class=" col-auto" style="width: 50%;">
                                            <select class="form-select form-select-lg mb-3" name="categorie"
                                                aria-label=".form-select-lg example" required>
                                                <option value="">Categorie</option>
                                                <option value="voiture">Voitures</option>
                                                <option value="motos">motos</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="mb-3">
                                        <label for="DataListMarque" class="form-label">Marque</label>
                                        <input class="form-control" list="datalistOptions" name="marque" required>
                                        <datalist id="datalistOptions">
                                            <option value="Mercedes-benz">
                                            <option value="BMW">
                                            <option value="Audi">
                                            <option value="volkswagen">
                                            <option value="Porche">
                                            <option value="Abarth">
                                            <option value="Alfa Romeo">
                                            <option value="Aston Martin">
                                            <option value="Bently">
                                            <option value="Bugatti">
                                            <option value="Cadillac">
                                            <option value="Chevrolet">
                                            <option value="Citoen">
                                            <option value="Dacia">
                                            <option value="Ferrari">
                                            <option value="Fiat">
                                            <option value="Ford">
                                            <option value="DS">
                                            <option value="GMC">
                                            <option value="Hyundai">
                                            <option value="Honda">
                                            <option value="Hummer">
                                            <option value="Infiniti">
                                            <option value="Isuzu">
                                            <option value="Jaguar">
                                            <option value="Jeep">
                                            <option value="Kia">
                                            <option value="Maserati">
                                            <option value="Maybach">
                                            <option value="Mazda">
                                            <option value="Mini">
                                            <option value="Nissan">
                                            <option value="Opel">
                                            <option value="Peugeot">
                                            <option value="Rolls Royce">
                                            <option value="Renault">
                                            <option value="Seat">
                                            <option value="Scoda">
                                            <option value="Tesla">
                                            <option value="Toyota">
                                            <option value="Volvo">
                                        </datalist>
                                    </div>
                                    <div class="mb-3">
                                        <label for="modele" class="form-label">Modele</label>
                                        <input type="text" class="form-control" name="modele" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="anneemodele" class="form-label">Annee-modele</label>
                                        <input type="number" class="form-control" name="anneemodele" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="PF" class="form-label">Puissance Fiscale (CV)</label>
                                        <input type="number" class="form-control" name="PF" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="prix" class="form-label">Prix</label>
                                        <input type="number" class="form-control" name="prix" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="Carburant" class="form-label">Carburant</label>
                                        <br />
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Carburant"
                                                id="inlineRadio1" value="Diesel">
                                            <label class="form-check-label" for="inlineRadio1">Diesel</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Carburant"
                                                id="inlineRadio2" value="Essence">
                                            <label class="form-check-label" for="inlineRadio2">Essence</label>
                                        </div>
                                        <input class="form-check-input" type="radio" name="Carburant" id="inlineRadio3"
                                            value="Electrique">
                                        <label class="form-check-label" for="inlineRadio3">Electrique</label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Carburant"
                                                id="inlineRadio4" value="Hybride">
                                            <label class="form-check-label" for="inlineRadio4">Hybride</label>
                                        </div>
                                        <br />
                                    </div>


                                    <div class="row g-5" style="justify-content: space-between;">
                                        <div class="col-auto" style="width:25%;">
                                            <label for="image" class="form-label">Titre de l`image</label>
                                            <input type="name" class="form-control" name="image">
                                        </div>
                                        <div class="col-auto" style="width:25%;">
                                            <label for="image2" class="form-label">Titre de l image 2</label>
                                            <input type="text" class="form-control" name="image2">
                                        </div>
                                        <div class="col-auto" style="width:25%;">
                                            <label for="image3" class="form-label">Titre de l image 3</label>
                                            <input type="text" class="form-control" name="image3">
                                        </div>
                                        <div class="col-auto" style="width:25%;">
                                            <label for="image4" class="form-label">Titre de l image 4</label>
                                            <input type="text" class="form-control" name="image4">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="desc" class="form-label">Description</label>
                                        <textarea class="form-control" name="desc" required></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="Ville" class="form-label">Ville</label>
                                        <input type="text" class="form-control" name="Ville" required>
                                    </div>
                                    <hr class="my-4">
                                    <div class="d-grid gap-2 col-6 mx-auto">
                                        <button type="submit" name="valider" class="btn btn-light">
                                            Ajouter
                                        </button>
                                    </div>

                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="../assets//js//bootstrap.js"></script>
    <script src="../assets//js//dashboard.js"></script>
</body>

</html>