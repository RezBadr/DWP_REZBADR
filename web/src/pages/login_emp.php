<?php
include '../assets/php/config.php';
session_start();
if (isset($_POST['submit'])){
  $UID = $_POST['UID'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM employe WHERE CIN='$UID' AND password='$password'";
  $result = mysqli_query($conn,$sql);
  if($result->num_rows > 0){
       $row = mysqli_fetch_assoc($result);
       $_SESSION['username'] = $row['username'];
       header("Location:Employe.php");
  }else{
    echo "<script>alert('UID or Passwor is wrong')</script>";
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
    <link href="../assets/Css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center" style="background-image: url(../assets/images/pg3.webp); background-repeat: no-repeat;background-size: cover;">
    
<main class="form-signin" style="background-color: rgba(0, 0, 0, 0.7);color: #000; border-radius: 15px;">

                  <form action="" method="POST" class="login-UID" >
                    <img src="../assets/images/AdobeStock_427723549.jpeg" alt="" width="90" height="90" alt="">
                    <p class="login-text" style="font-size: 2rem;color:#fff; font-weight: 800;">Se connecter</p>
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" name="UID"  required>
                      <label for="UID">UID</label>
                    </div>
                    <div class="form-floating mb-3">
                      <input type="password" class="form-control" name="password">
                      <label for="password">Password</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" name="submit" type="submit">se connecter</button>
                    <hr class="my-4">
                    <small class="text-muted">By clicking Sign up, you agree to the terms of use.</small>
                  </form>
                

    
</main>


    
  </body>
</html>
