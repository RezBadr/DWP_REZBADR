<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="shortcut icon" type="x-icon" href="../assets//images//AdobeStock_427723549.jpeg" />
    <link href="../assets/Css/bootstrap.css" rel="stylesheet" />
    <link href="../assets/Css/headers.css" rel="stylesheet" />
    <link href="../assets/Css/heroes.css" rel="stylesheet" />
    <link href="../assets/Css/features.css" rel="stylesheet" />
    <link href="../assets/Css/product.css" rel="stylesheet" />
    <link href="../assets/Css/style.css" rel="stylesheet" />
    <link href="../assets/Css/footers.css" rel="stylesheet" />
    <script src="../assets/js/bootstrap.js"></script>
    <title>Garege Auto</title>
</head>

<body>
    <header style="background-color: black;">
        <div class="container">
            <div class="row">
                <div class="col order-last" style="justify-items: center; margin: auto;">
                    <div class="text-end">
                        <a href="./Sign-in.php"> <button type="button"
                                class="btn btn-outline-light">Connexion</button></a>
                        <a href="./src/pages/Sign-up.php"> <button type="button" class="btn btn-outline-warning">Creer
                                un compte</button></a>
                    </div>
                </div>
                <div class="col">
                    <div class="text-center">
                        <a href="#"><img src="../assets/images/AdobeStock_427723549.jpeg" alt="logo" width="150px"
                                height="100px" /></a>
                    </div>
                </div>
                <div class="col order-first">
                </div>
            </div>
        </div>
        <div class="px-3 py-2 bg-dark text-white">
            <div class="container">
                <div class="container">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="false">ACCUEIL</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <MARKETPLACE class="nav-link" id="pills-MARKETPLACE-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-MARKETPLACE" type="button" role="tab"
                                aria-controls="pills-MARKETPLACE" aria-selected="false">MARKETPLACE</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-RDV-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-RDV" type="button" role="tab" aria-controls="pills-contact"
                                aria-selected="true">PRENDRE RENDEZ-VOUS</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-Employe-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-Employe" type="button" role="tab" aria-controls="pills-contact"
                                aria-selected="false">ESPACE DES EMPLOYES</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-annonce-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-annonce" type="button" role="tab" aria-controls="pills-annonce"
                                aria-selected="false"> DEPOSER UNE ANNONCE</button>
                        </li>
                    </ul>
                </div>
    </header>
    <main>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light"
                    style="background-image: url(https://thumbs.dreamstime.com/b/portrait-d-un-m%C3%A9canicien-r%C3%A9ussi-dans-garage-r%C3%A9paration-et-servi-107822582.jpg);background-repeat:no-repeat;background-size:cover;">
                    <div class="col-md-5 p-lg-5 mx-auto my-5">
                        <h1 class="display-4 fw-normal" style="text-align:center;">Bienvenue chez garage Super Cars
                        </h1>
                        <p class="lead fw-normal" style="text-align:center;">
                            Que shouaitez-vous faire?
                        </p>
                    </div>
                </div>
                <div class="container-fluid" style="background-color: black; color: #fff;">
                    <div class="container px-4 py-5" id="featured-3">
                        <h2 class="pb-2 border-bottom" style="text-align:center;">Nos services</h2>
                        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                            <div class="feature col">
                                <a href="RDV.php" class="NosServices">
                                    <div style="justify-content: center;margin:auto;">
                                        <img src="../assets//images//reparation-automobile (1).png" alt="battrie"
                                            width=50px height="50px">
                                    </div>
                                    <div style="justify-content: center;margin:auto;">
                                        <h2>Entretien</h2>
                                    </div>
                                </a>
                            </div>
                            <div class="feature col">
                                <a href="RDV.php" class="NosServices">
                                    <div style="justify-content: center;margin:auto;">
                                        <img src="../assets//images//Mecanique.png" alt="battrie" width=50px
                                            height="50px">
                                    </div>
                                    <div style="justify-content: center;margin:auto;">
                                        <h2>Mecanique</h2>
                                    </div>
                                </a>
                            </div>
                            <div class="feature col" style="height: 250px;">
                                <a href="Marketplace.php" class="NosServices">
                                    <div style="justify-content: center;margin:auto;">
                                        <img src="https://thumbs.dreamstime.com/b/online-marketplace-icon-monochrome-style-design-e-commerce-collection-ui-pixel-perfect-simple-pictogram-online-marketplace-126031325.jpg"
                                            alt="" width="60px" height="60px">
                                    </div>
                                    <div style="justify-content: center;margin:auto;">
                                        <h2>Marketplace</h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="container px-4 py-5" id="featured-3">
                        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                            <div class="feature col">
                                <a href="RDV.php" class="NosServices">
                                    <div style="justify-content: center;margin:auto;">
                                        <img src="../assets//images//galce.png" alt="battrie" width=50px height="50px">
                                    </div>
                                    <div style="justify-content: center;margin:auto;">
                                        <h2>Vitrage</h2>
                                    </div>
                                </a>
                            </div>
                            <div class="feature col">
                                <a href="RDV.php" class="NosServices">
                                    <div style="justify-content: center;margin:auto;">
                                        <img src="../assets//images//carrosserie.png" alt="battrie" width=50px
                                            height="50px">
                                    </div>
                                    <div style="justify-content: center;margin:auto;">
                                        <h2>Carrosserie</h2>
                                    </div>
                                </a>
                            </div>
                            <div class="feature col" style="height: 250px;">
                                <a href="RDV.php" class="NosServices">
                                    <div style="justify-content: center;margin:auto;">
                                        <img src="../assets//images//pneus.png" alt="battrie" width=50px height="50px">
                                    </div>
                                    <div style="justify-content: center;margin:auto;">
                                        <h2>Pneus</h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid" style="background-color: black; color: #fff;padding:5px">
                    <div class="container px-4 py-5">
                        <h2 class="pb-2 border-bottom" style="text-align:center;">Plan d'accès et horaires </h2>
                        <div style="display:flex;">
                            <div style="width:50%;margin:3px 5px 3px 0;">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1048.5888454309788!2d-5.220367635608543!3d33.44769169429952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sma!4v1652576641016!5m2!1sfr!2sma"
                                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <div style="width:50%;margin:3px 0 3px 5px;">


                                <h4 class="pb-2 border-bottom"
                                    style="font-family:'Times New Roman', Times, serif;text-align:center;background-color:#fff;color:yellowgreen;">
                                    Les horaires
                                </h4>
                                <ul class="nav flex-column"
                                    style="height:89%;padding-left:30%;padding-top:5%;border:1px #fff solid;">
                                    <li class="nav-item mb-2">✅Lundi 8h30 à 19h00</li>
                                    <li class="nav-item mb-2">✅Mardi 8h30 à 19h00</li>
                                    <li class="nav-item mb-2">✅Mercredi 8h30 à 19h00</li>
                                    <li class="nav-item mb-2">✅Jeudi 8h30 à 19h00</li>
                                    <li class="nav-item mb-2">✅Vendredi 8h00 à 13h00 </li>
                                    <li class="nav-item mb-2">✅Samedi 8h30 à 19h00 </li>
                                    <li class="nav-item mb-2">❌Dimanche ferme</li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-MARKETPLACE" role="tabpanel" aria-labelledby="pills-MARKETPLACE-tab">
                <div class="container"
                    style="margin-top:20px;margin-bottom:20px;padding:10px;border:1px #000 solid;border-radius:10px;">
                    <form action="" method="POST">
                        <div class="row">
                            <div class="col order-last">
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button type="submit" class="btn btn-dark" name="rechercher">rechercher</button>
                                </div>
                            </div>
                            <div class="col" style="justify-items: center;margin: auto;">
                                <select class="form-select form-select-md mb-3" name="categorie"
                                    aria-label=".form-select-lg example" required>
                                    <option value="Categorie">Categorie</option>
                                    <option value="voiture">Voitures</option>
                                    <option value="motos">motos</option>
                                </select>
                            </div>
                            <div class="col order-first">

                                <input type=" text" class="form-control" name="search" placeholder="Search..."
                                    aria-label="Search">

                            </div>
                        </div>
                    </form>

                </div>
                <div class="container">
                    <?php
                     require("../assets/php/commande.php");
                     include("../assets/php/connexion.php");
                     @$rechercher = $_POST["rechercher"];
                     @$search = $_POST["search"];
                     @$categorie = $_POST["categorie"];
                     if(isset($rechercher)){
                           if(empty($search)){
                               if($categorie=='Categorie'){
                                    $Produits = afficher();
                                }
                                else{
                                     $Produits = rechercher($search,$categorie);
                            }
                            }else{
                                if($categorie=='Categorie'){
                                $Produits = rechercherSearch($search);
                                }else{
                                 $Produits = rechercherCategorie($categorie);
                                }
                            }
                     }else{ 
                            $Produits = afficher();
                     }
                     ?>
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                        <?php foreach($Produits as $produit): ?>
                        <div class="col">
                            <div class="card shadow-sm">
                                <title><?= $produit->nom ?></title><img src="<?= $produit->image ?>" height="250px" />

                                <div class="card-body">
                                    <h4 style="text-align:center;"> <?= $produit->nom ?> </h4>
                                    <p class="cadr-text" style="text-align:center;">
                                        <strong style="color:brown;"> <?= $produit->prix ?> DH </strong><br />
                                        <?=$produit->Carburant ?> -
                                        <?=$produit->Ville ?>
                                    </p>
                                    <div class=" d-flex justify-content-between align-items-center">
                                        <div class="d-grid gap-2 col-6 mx-auto">
                                            <form action="" method="post">
                                                <button type="submit" name="afficher"
                                                    class="btn btn-sm btn-warning">Afficher
                                                    l'annonce</button>
                                            </form>
                                            <?php
                                            if(isset($_POST['afficher'])){
                                                $id_produit = $produit->id_produit;
                                            }

                                            ?>

                                        </div>
                                        <small class="text-muted"></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-annonce" role="tabpanel" aria-labelledby="pills-annonce-tab">
                <?php
                 require("../assets/php/commande.php");
                 if(isset($_POST['Ajouter'])){
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
                <div class="container">
                    <form action="" method="POST">
                        <div
                            style="border: 2px #000 solid; border-radius:10px; margin-top:15px;padding:10px;background-color:rgba(0,0,0,0.8);">

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
                                    <input class="form-check-input" type="radio" name="Carburant" id="inlineRadio1"
                                        value="Diesel">
                                    <label class="form-check-label" for="inlineRadio1"
                                        style="color:#4a8aca;">Diesel</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="Carburant" id="inlineRadio2"
                                        value="Essence">
                                    <label class="form-check-label" for="inlineRadio2"
                                        style="color:#4a8aca;">Essence</label>
                                </div>
                                <input class="form-check-input" type="radio" name="Carburant" id="inlineRadio3"
                                    value="Electrique">
                                <label class="form-check-label" for="inlineRadio3"
                                    style="color:#4a8aca;">Electrique</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="Carburant" id="inlineRadio4"
                                        value="Hybride">
                                    <label class="form-check-label" for="inlineRadio4"
                                        style="color:#4a8aca;">Hybride</label>
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
                                <button type="submit" name="Ajouter" class="btn btn-light">
                                    Ajouter
                                </button>
                            </div>

                        </div>
                    </form>
                </div>

            </div>
            <div class="tab-pane fade show active" id="pills-RDV" role="tabpanel" aria-labelledby="pills-RDV-tab">
                <div style="width:90%;justify-content:center;margin:auto;">
                    <h2 class="pb-2 border-bottom"
                        style="text-align:center;font-family:'Times New Roman', Times, serif;">Prenez rendez-vous pour
                        l'entretien de
                        votre voiture</h2>
                    <p style="font-family: Times, serif;">Remplissez ce formulaire pour demander un
                        rendez-vous pour un
                        entretien. Notre conseiller prendra
                        contact avec vous rapidement pour confirmer votre rendez-vous.</p>
                    <?php
               @$service= $_POST["service"];
               @$valider = $_POST["valider"];
               @$email = $_POST["email"];
               @$date = $_POST["date"];
               @$time = $_POST["time"];
               @$nom = $_POST["nom"];
               @$prenom = $_POST["prenom"];
               @$tel = $_POST["tel"];
               @$marque = $_POST["marque"];
               @$anneemodele = $_POST["anneemodele"];
               @$modele = $_POST["modele"];
               @$num_immatriculation = $_POST["num_immatriculation"];
               @$kilometrage = $_POST["kilometrage"];
               if (isset($valider)){
               include("../assets/php/connexion.php");
               $req = $pdo->prepare("insert into rendezvous (service,email,num_immatriculation,date,time,nom,prenom,tel,marque,modele,anneemodele,kilometrage) values(?,?,?,?,?,?,?,?,?,?,?,?)");
               $req->execute(array(implode(" & ",$service),$email,$num_immatriculation,$date,$time,$nom,$prenom,$tel,$marque,$modele,$anneemodele,$kilometrage));
               echo "<script>alert('لقد حددت موعدك')</script>";
               }
              ?>
                    <form method="POST" action="">
                        <div style="background-color: rgba(0,0,0,0.7);color: #fff;padding:20px; ">
                            <div class="container-fluid">
                                <h2 class="pb-2 border-bottom" style="text-align:center;">
                                    CHOISISSEZ L’INTERVENTION À
                                    RÉALISER</h2>
                                <img src="https://s3-eu-west-1.amazonaws.com/assetseu.izmocars.com/formbuilder/1626428584266_apvimage.jpg"
                                    alt="" width="100%">

                                <ul class="list-group list-group-horizontal" style="margin-top:5px;margin-bottom:5px;">
                                    <li class="list-group-item" style="width:25% ;">
                                        <input class="form-check-input me-1" type="checkbox" value="Freinage"
                                            name="service[]">
                                        <label class="form-check-label" for="Freinage">
                                            <img src="../assets//images//disc-brake.png" alt="d">
                                            Freinage
                                        </label>
                                    </li>
                                    <li class="list-group-item" style="width:25% ;">
                                        <input class="form-check-input me-1" type="checkbox" value="batterie"
                                            name="service[]">
                                        <label class="form-check-label" for="batterie">
                                            <img src="../assets//images//8541729_car_battery_icon.png" alt="b"
                                                width="32px" height="32px">
                                            Batterie
                                        </label>
                                    </li>
                                    <li class="list-group-item" style="width:25% ;">
                                        <input class="form-check-input me-1" type="checkbox" value="echappement"
                                            name="service[]">
                                        <label class="form-check-label" for="echappement">
                                            <img src="../assets//images//tuyau-dechappement.png" alt="de">
                                            Echappement
                                        </label>
                                    </li>
                                    <li class="list-group-item" style="width:25% ;">
                                        <input class="form-check-input me-1" type="checkbox" value="amortisseur"
                                            name="service[]">
                                        <label class="form-check-label" for="amortisseur">
                                            <img src="../assets//images//amortisseur.png" alt="">
                                            Amortisseur
                                        </label>
                                    </li>
                                </ul>
                                <ul class="list-group list-group-horizontal" style="margin-top:5px;margin-bottom:5px;">
                                    <li class="list-group-item" style="width:25% ;">
                                        <input class="form-check-input me-1" type="checkbox" value="ControleTehnique"
                                            name="service[]">
                                        <label class="form-check-label" for="ControleTechnique">
                                            <img src="../assets//images//chercher.png" alt="">
                                            Controle Thechnique
                                        </label>
                                    </li>
                                    <li class="list-group-item" style="width:25% ;">
                                        <input class="form-check-input me-1" type="checkbox" value="Vidange_revision"
                                            name="service[]">
                                        <label class="form-check-label" for="Vidange_revision">
                                            <img src="../assets//images//petrole.png" alt="">
                                            Vidange-revision
                                        </label>
                                    </li>
                                    <li class="list-group-item" style="width:25% ;">
                                        <input class="form-check-input me-1" type="checkbox" value="Climatisation"
                                            name="service[]">
                                        <label class="form-check-label" for="Climatisation">
                                            <img src="../assets//images//climatisation.png" alt="">
                                            Climatisation
                                        </label>
                                    </li>
                                    <li class="list-group-item" style="width:25% ;">
                                        <input class="form-check-input me-1" type="checkbox"
                                            value="Mecanique_diagnostique" name="service[]">
                                        <label class="form-check-label" for="Mecanique_diagnostique">
                                            <img src="../assets//images//Mecanique.png" alt="" width="32px"
                                                height="32px">
                                            Mecanique / diagnostic
                                        </label>
                                    </li>
                                </ul>
                                <ul class="list-group list-group-horizontal" style="margin-top:5px;margin-bottom:5px;">
                                    <li class="list-group-item" style="width:25% ;">
                                        <input class="form-check-input me-1" type="checkbox" value="Vitrage"
                                            name="service[]">
                                        <label class="form-check-label" for="Vitrage">
                                            <img src="../assets//images//galce.png" alt="" width="32px" height="32px">
                                            Vitrage
                                        </label>
                                    </li>
                                    <li class="list-group-item" style="width:25% ;">
                                        <input class="form-check-input me-1" type="checkbox" value="carrosserie"
                                            name="service[]">
                                        <label class="form-check-label" for="Carrosserie">
                                            <img src="../assets//images//carrosserie.png" alt="" width="32px"
                                                height="32px">
                                            Carrosserie
                                        </label>
                                    </li>
                                    <li class="list-group-item" style="width:25% ;">
                                        <input class="form-check-input me-1" type="checkbox" value="PneusHiver"
                                            name="service[]">
                                        <label class="form-check-label" for="PneusHiver">
                                            <img src="../assets//images//tire (1).png" alt="">
                                            Pneus hiver
                                        </label>
                                    </li>
                                    <li class="list-group-item" style="width:25% ;">
                                        <input class="form-check-input me-1" type="checkbox" value="Roue_PneusHiver"
                                            name="service[]">
                                        <label class="form-check-label" for="Roues_PneusHiver">
                                            <img src="../assets//images//wheel.png" alt="">
                                            Roues + PneusHiver
                                        </label>
                                    </li>
                                </ul>
                                <ul class="list-group list-group-horizontal" style="margin-top:5px;margin-bottom:5px;">
                                    <li class="list-group-item" style="width:50% ;">
                                        <input class="form-check-input me-1" type="checkbox" value="PneusEte"
                                            name="service[]">
                                        <label class="form-check-label" for="PneusEte">
                                            <img src="../assets//images//tire.png" alt="">
                                            Pneus ete
                                        </label>
                                    </li>
                                    <li class="list-group-item" style="width:50% ;">
                                        <input class="form-check-input me-1" type="checkbox" value="Roues_PneusEte"
                                            name="service[]">
                                        <label class="form-check-label" for="Roues_PneusEte">
                                            <img src="../assets//images//wheel.png" alt="">
                                            Roues + Pneus ete
                                        </label>
                                    </li>
                                </ul>
                            </div>

                            <div class="container-fluid">
                                <h2 class="pb-2 border-bottom" style="text-align:center;">Véhicule possédé</h2>

                                <div class="container">
                                    <div class="mb-3">
                                        <label for="num_immatriculation" class="form-label">Numéro
                                            d'immatriculation</label>
                                        <input type="text" class="form-control" name="num_immatriculation"
                                            placeholder="12-a-11" required>
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
                                        <label for="modele" class="form-label">Modèle</label>
                                        <input type="text" class="form-control" name="modele" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="anneemodele" class="form-label">Année-modèle</label>
                                        <input type="number" class="form-control" name="anneemodele" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="Kilomertrage" class="form-label">Kilométrage</label>
                                        <input type="number" class="form-control" name="kilometrage">
                                    </div>
                                </div>
                            </div>


                            <div class="container-fluid">
                                <h2 class="pb-2 border-bottom" style="text-align:center;">La DATE ET L'HORAIRE DE
                                    RENDEZ-VOUS</h2>

                                <div class="container">
                                    <div>
                                        <div class="mb-3">
                                            <div class="input-group date">
                                                <label for="date" class="form-label"></label>
                                                <input type="date" class="form-control" name="date" placeholder="date"
                                                    required>

                                                <span class="input-group-append ">
                                                    <span class="input-group-text"><i
                                                            class="bi bi-calendar2-plus-fill"></i>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="input-group date">
                                                <label for="time" class="form-label"></label>
                                                <input type="time" class="form-control" name="time" required>
                                                <span class="input-group-append ">
                                                    <span class="input-group-text"><i class="bi bi-clock-fill"></i>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>


                            <div>
                                <div class="container-fluid">
                                    <h2 class="pb-2 border-bottom" style="text-align:center;">INFORMATION DE CONTACT
                                    </h2>

                                    <div class="container">
                                        <div class="row g-5" style="justify-content: space-between;">
                                            <div class="col-auto" style="width:50%;">
                                                <label for="nom" class="form-label">Nom</label>
                                                <input type="text" class="form-control" name="nom" required>
                                            </div>
                                            <div class="col-auto" style="width:50%;">
                                                <label for="prenom" class="form-label">Prenom</label>
                                                <input type="text" class="form-control" name="prenom" required>
                                            </div>
                                        </div>
                                        <div class="row g-5" style="justify-content: space-between;">
                                            <div class="col-auto" style="width:50%;">
                                                <label for="tel" class="form-label">Tel</label>
                                                <input type="text" class="form-control" name="tel" required>
                                            </div>
                                            <div class="col-auto" style="width:50%;">
                                                <label for="email" class="form-label">email</label>
                                                <input type="email" class="form-control" name="email" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-4">
                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button name="valider" type="submit" class="btn btn-light">Envoyer</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-Employe" role="tabpanel" aria-labelledby="pills-Employe-tab">
                <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
                    <div class="col-md-5 p-lg-5 mx-auto my-5">
                        <h1 class="display-4 fw-normal">ESPACE-EMPLOYES</h1>
                        <p class="lead fw-normal">Cette place est réservée aux employés du stationnement.</p>
                        <a class="btn btn-outline-secondary" href="./src/pages/login_emp.php">ACCES A
                            ESPACE-EMPLOYES</a>
                    </div>
                    <div class="product-device shadow-sm d-none d-md-block"></div>
                    <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
                </div>
            </div>
    </main>
    <div style="background-color:darkgray;border-top: 1px #000 solid">
        <div class="container">
            <footer class="py-5">
                <div class="row" style="justify-content:space-between;">
                    <div class="col-2">
                        <h4 style="font-family:'Times New Roman', Times, serif;">Nos services</h4>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="./RDV.php" class="nav-link p-0 ">Entretien</a></li>
                            <li class="nav-item mb-2"><a href="./RDV.php" class="nav-link p-0 ">Mecanique</a></li>
                            <li class="nav-item mb-2"><a href="./sRDV.php" class="nav-link p-0 ">Depannage</a></li>
                            <li class="nav-item mb-2"><a href="./RDV.php" class="nav-link p-0 ">Vitrage</a>
                            </li>
                            <li class="nav-item mb-2"><a href="./RDV.php" class="nav-link p-0 ">Carrosserie</a></li>
                            <li class="nav-item mb-2"><a href="./RDV.php" class="nav-link p-0 ">Pneus</a>
                            </li>
                        </ul>

                    </div>

                    <div class="col-2" style="width: auto;">
                        <h4 style="font-family:'Times New Roman', Times, serif;">Rester en contact</h4>
                        <ul class="nav flex-column" style="color:#0d6efd;">
                            <li class="nav-item mb-2"><i class="bi bi-telephone-fill"> Tel: 0500300030 </i> </li>
                            <li class="nav-item mb-2"><a href="mailto:supercars@gmail.com" class="nav-link p-0 "><i
                                        class="bi bi-envelope-fill"> Envoyez un email</i></a>
                            </li>
                        </ul>
                    </div>


                    <div class="col-2">
                        <h4 style="font-family:'Times New Roman', Times, serif;">Nos resaux</h4>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 "><i class="bi bi-facebook">
                                        Facebook</i></a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 "><i class="bi bi-instagram">
                                        Instagram</i></a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 "><i class="bi bi-twitter">
                                        Twitter</i></a></li>
                        </ul>
                    </div>


                </div>

                <div class="d-flex justify-content-between py-4 my-4 border-top">
                    <p>&copy; 2021 Company, Inc. All rights reserved.</p>
                </div>
            </footer>
        </div>
    </div>
</body>

</html>