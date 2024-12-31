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
                <a class="nav-link px-3" href="./logout.php">Sign out</a>
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
                            <a class="nav-link" href="TachesCompletes.php">
                                <span data-feather=" taches_Completes"></span>
                                Les taches Completes
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="clients.php">
                                <span data-feather="users"></span>
                                Clients
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <h2>Liste des clients</h2>
                <div class="table-responsive">
                    <?php 
      include("../assets/php/connexion.php");
      $taches = $pdo->query('SELECT * FROM client ');
      echo '<table class="table table-hover   table-sm  table-bordered">';
        echo '<thead>';
            echo '<tr>';
                 echo '<th scope="col">id client</th>';
                 echo '<th scope="col">Nom de client</th>';
                 echo '<th scope="col">E-mail</th>';
                 echo '<th scope="col"> Tel</th>';
                 echo '<th scope="col">Adresse</th>';
                 
            echo '</tr>';
        echo '</thead>';  
        while($ligne = $taches->fetch()){
          echo '<tr>';
              echo '<td>';
                  echo $ligne['id'];
              echo '</td>';
              echo '<td>';
                  echo $ligne['username'];
              echo '</td>';
              echo '<td>';
                  echo $ligne['email'];
              echo '</td>';
              echo '<td>';
                  echo $ligne['tel'];
              echo '</td>';
              echo '<td>';
                  echo $ligne['adresse'];
              echo '</td>';
          echo '</tr>';
      }
      echo '</table>';
    ?>
                </div>
                <div>
                    <?php
      @$id = $_POST["id"];
     
      @$Supprimer = $_POST["Supprimer"];
      if (isset($Supprimer)){
        include("../assets/php/connexion.php");
        $req =  $pdo->prepare("DELETE FROM client WHERE  id = ? ");
        $req->execute(array($id));
        echo "<script>alert('Client supprimer')</script>";
        }
      ?>
                    <form action="" method="POST" class="row g-3" style="justify-content:center;margin:auto;">
                        <div class="col-auto">
                            <label for="id" class="visually-hidden">id client</label>
                            <input type="number" class="form-control" name="id" placeholder="Num" required>
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-danger mb-3" name="Supprimer">Supprimer</button>
                        </div>
                    </form>
                </div>
            </main>
        </div>
    </div>


    <script src="../assets//js//bootstrap.js"></script>
    <script src="../assets//js//dashboard.js"></script>

</body>

</html>