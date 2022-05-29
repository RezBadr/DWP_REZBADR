<?php 
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">-->
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
    <script src="../assets//js//bootstrap.js"></script>
    <script src="../assets//js//dashboard.js"></script>
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
                                <span data-feather="file"></span>
                                Orders
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Produits.php">
                                <span data-feather="file"></span>
                                Produits
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">
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
               @$service= $_POST["service"];
               @$valider = $_POST["valider"];
               @$date = $_POST["date"];
               @$nom = $_POST["nom"];
               @$prenom = $_POST["prenom"];
               @$marque = $_POST["marque"];
               @$anneemodele = $_POST["anneemodele"];
               @$num_immatriculation = $_POST["num_immatriculation"];
               @$kilometrage = $_POST["kilometrage"];
               @$montantPaye = $_POST["montantPaye"];
               if (isset($valider)){
               include("../assets/php/connexion.php");
               $req = $pdo->prepare("insert into rendezvous (service,num_immatriculation,date,nom,prenom,marque,anneemodele,kilometrage,Complete,montantPaye) values(?,?,?,?,?,?,?,?,?,?)");
               $req->execute(array(implode("&",$service),$num_immatriculation,$date,$nom,$prenom,$marque,$anneemodele,$kilometrage,1,$montantPaye));
               echo "<script>alert('Tache complete')</script>";
               }
      ?>
                <div>
                    <h2 style="text-align: center;">Ajouter une tache complete</h2>
                    <form method="POST" action="">
                        <div class="container"
                            style="border: 2px #000 solid; border-radius:10px; margin-top:15px;padding:20px;background-color:dimgray">
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
                                        <img src="../assets//images//8541729_car_battery_icon.png" alt="b" width="32px"
                                            height="32px">
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
                                    <input class="form-check-input me-1" type="checkbox" value="Mecanique_diagnostique"
                                        name="service[]">
                                    <label class="form-check-label" for="Mecanique_diagnostique">
                                        <img src="../assets//images//Mecanique.png" alt="" width="32px" height="32px">
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
                                        <img src="../assets//images//carrosserie.png" alt="" width="32px" height="32px">
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
                            <div class="mb-3">
                                <label for="num_immatriculation" class="form-label">Num immatriculation</label>
                                <input type="text" class="form-control" name="num_immatriculation" placeholder="12-a-11"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="marque" class="form-label">Marque</label>
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
                                <label for="anneemodele" class="form-label">Année-modèle</label>
                                <input type="text" class="form-control" name="anneemodele" required>
                            </div>

                            <div class="mb-3">
                                <label for="Kilomertrage" class="form-label">Kilometrage</label>
                                <input type="text" class="form-control" name="kilometrage">
                            </div>




                            <div>
                                <div class="mb-3">
                                    <label for="tModele" class="form-label">La date</label>
                                    <input type="date" class="form-control" name="date" required>
                                </div>
                                <div class="mb-3">
                                    <label for="Modele" class="form-label">Heure</label>
                                    <input type="time" class="form-control" name="time">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="nom" class="form-label">Nom</label>
                                <input type="text" class="form-control" name="nom" required>
                            </div>
                            <div class="mb-3">
                                <label for="prenom" class="form-label">Prenom</label>
                                <input type="text" class="form-control" name="prenom" required>
                            </div>

                            <div class="mb-3">
                                <label for="montantPaye" class="form-label">Montant paye</label>
                                <input type="number" class="form-control" name="montantPaye" required>
                            </div>
                            <hr class="my-4">
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button name="valider" type="submit" class="btn btn-light">Complete</button>
                            </div>
                        </div>
                    </form>
                </div>
            </main>
        </div>
</body>

</html>