<?php
include '../assets/php/config.php';

if(isset($_POST['submit'])){
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password =  $_POST['password'];
  $cpassword = $_POST['cpassword'];
  if($password == $cpassword){
      $sql = "SELECT * FROM client WHERE email='$email'";
      $result = mysqli_query($conn,$sql);
      if (mysqli_num_rows($result)>0){
        echo "<script>alert('L'email existe déjà.')</script>";
      }else{
        $sql = "INSERT INTO client(username,email,password)
                   VALUES('$username','$email','$password')";
        $result = mysqli_query($conn,$sql);
        if($result){
           echo "<script>alert('Enregistrement de l'utilisateur terminé')</script>";
            $username = "";
            $email = "";
            $_POST['password'] = "";
            $_POST['cpassword'] = "";
      }
      else{
        echo "<script>alert('quelque chose de mal s'est passé.')</script>";
      }
      }  
  }else{
    echo "<script>alert('Le mot de passe ne correspond pas')</script>";
  }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>S'inscrire</title>



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="../assets//Css//bootstrap.css" rel="stylesheet">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/bootstrap.css" rel="stylesheet">


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
    <link href="../assets//Css//signin.css" rel="stylesheet">
    <script src="../assets//js//bootstrap.js"></script>
</head>

<body class="text-center"
    style="display: flex;
    align-items: center;
    padding-top: 40px;
    padding-bottom: 40px;background-image: url(https://perfomax.ca/wp-content/uploads/garage-mecanique-generale-concessionnaire-min.jpg); background-repeat: no-repeat;background-size: cover;">

    <main style="width: 100%;
    max-width: 500px;
    padding: 15px;
    margin: auto;background-color: rgba(0, 0, 0, 0.7);color: #000; border-radius: 15px;">
        <div class="container">
            <form action="" method="POST">
                <img src="../assets/images/AdobeStock_427723549.jpeg" alt="" width="90" height="90" alt="">
                <p class="login-text" style="font-size: 2rem;color:#fff; font-weight: 800;">S'inscrire</p>


                <div class="input-group mb-2">
                    <span class="input-group-text" id="inputGroup-sizing-default"><span class="input-group-text"
                            style="color:#000;"><i class="bi bi-person-fill"></i></span></span>
                    <input class="form-control" type="text" placeholder="Nom et prenom" name="username" required>
                </div>

                <div class="input-group mb-2">
                    <span class="input-group-text" id="inputGroup-sizing-default"><span class="input-group-text"
                            style="color:#000;"><i class="bi bi-envelope-fill"></i></span></span>
                    <input class="form-control" aria-label="Sizing example input" type="email" placeholder="Email"
                        name="email" required>
                </div>

                <div class="input-group mb-2">
                    <span class="input-group-text" id="inputGroup-sizing-default"><span class="input-group-text"
                            style="color:#000;"><i class="bi bi-lock-fill"></i></span></span>
                    <input class="form-control" aria-label="Sizing example input" type="password"
                        placeholder="mot de passe" name="password" required>
                </div>

                <div class="input-group mb-2">
                    <span class="input-group-text" id="inputGroup-sizing-default"><span class="input-group-text"
                            style="color:#000;"><i class="bi bi-lock-fill"></i></span></span>
                    <input class="form-control" aria-label="Sizing example input" type="password"
                        placeholder="Confirmez le mot de passe" name="cpassword" required>
                </div>

                <div class="d-grid gap-2 col-6 mx-auto">
                    <button name="submit" type="submit" class="btn btn-lg btn-light">S'inscrire</button>
                </div>
                <hr class="my-4">

            </form>
            <a href="Sign-in.php"><button class="btn btn-sm btn-warning" type="submit"> Se connecter
                </button></a>
        </div>
    </main>



</body>

</html>