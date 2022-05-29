<?php
include '../assets/php/config.php';
session_start();
if (isset($_POST['submit'])){
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM client WHERE email='$email' AND password='$password'";
  $result = mysqli_query($conn,$sql);
  if($result->num_rows > 0){
       $row = mysqli_fetch_assoc($result);
       $_SESSION['username'] = $row['username'];
       header("Location:profil.php");
  }else{
    echo "<script>alert('Email ou le mot de passe est faux')</script>";
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
    <title>Signin</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
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
</head>

<body class="text-center"
    style="display: flex;
    align-items: center;
    padding-top: 40px;
    padding-bottom: 40px;background-image: url(https://perfomax.ca/wp-content/uploads/garage-mecanique-generale-concessionnaire-min.jpg); background-repeat: no-repeat;background-size: cover;">

    <main class="form" style="width: 100%;
    max-width: 500px;
    padding: 15px;
    margin: auto;background-color: rgba(0, 0, 0, 0.7);color: #000; border-radius: 15px;">
        <form action="" method="POST" class="login-email">
            <img src="../assets/images/AdobeStock_427723549.jpeg" alt="" width="90" height="90" alt="">
            <p class="login-text" style="font-size: 2rem;color:#fff; font-weight: 800;">Se connecter</p>
            <div class="form-floating" style="color: #000;">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default"><span class="input-group-text"
                            style="color:#000;"><i class="bi bi-envelope-fill"></i></span></span>
                    <input class="form-control" type="email" placeholder="Email" name="email" required>
                </div>
            </div>
            <div class="form-floating" style="color: #000;">
                <div class="input-group mb-2">
                    <span class="input-group-text" id="inputGroup-sizing-default"><span class="input-group-text"
                            style="color:#000;"><i class="bi bi-lock-fill"></i></span></span>
                    <input class="form-control" type="password" placeholder="mot de passe" name="password" required>
                </div>
            </div>
            <div>
                <button name="submit" type="submit" class="btn btn-lg btn-light">Se connecte</button>
            </div>
            <div class="checkbox mb-2">
                <hr class="my-4">
                <p><a href="#">mot de passe oublie</a></p>
            </div>
        </form>
        <a href="Sign-up.php"><button class="btn btn-sm btn-warning" style="width: 50%;" type="submit">Creer nouveau
                compte</button></a>
    </main>



</body>

</html>