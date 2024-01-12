<?php
session_start();
$error = $_GET['error'];
if ($error === "invalidPwd") {
  echo '
    <div class="video-box popup">
<div class="alert alert-danger" role="alert">
  Your typed an incorrect password!
  <button class="btn btn-cross">
  <i class="fa-solid fa-xmark"></i>
  </button>
</div>
  </div>
    ';
} elseif ($error == "noError") {
  echo '
    <div class="video-box popup">
<div class="alert alert-success" role="alert">
  Your account is successfully created!.
  <button class="btn btn-cross">
  <i class="fa-solid fa-xmark"></i>
  </button>
</div>
  </div>
    ';
} elseif ($error == "invalidUser") {
  echo '
    <div class="video-box popup">
<div class="alert alert-danger" role="alert">
  Your email is not registered yet ! Please Sign Up your account.
  <button class="btn btn-cross">
  <i class="fa-solid fa-xmark"></i>
  </button>
</div>
  </div>
    ';
} elseif ($error == "emptyInput") {
  echo '
    <div class="video-box popup">
<div class="alert alert-danger" role="alert">
  All fields are required! Please fill empty fields.
  <button class="btn btn-cross">
  <i class="fa-solid fa-xmark"></i>
  </button>
</div>
  </div>
    ';
} elseif ($error == "shortPassword") {
  echo '
    <div class="video-box popup">
<div class="alert alert-danger" role="alert">
  Password must be equal or greater than 8 letters!
  <button class="btn btn-cross">
  <i class="fa-solid fa-xmark"></i>
  </button>
</div>
  </div>
    ';
} elseif ($error == "userExists") {
  echo '
    <div class="video-box popup">
<div class="alert alert-danger" role="alert">
  User Already Exists.Please login your account!
  <button class="btn btn-cross">
  <i class="fa-solid fa-xmark"></i>
  </button>
</div>
  </div>
    ';
} elseif ($error == "logout") {
  echo '
    <div class="video-box popup">
<div class="alert alert-success" role="alert">
  You have successfully logout your account!
  <button class="btn btn-cross">
  <i class="fa-solid fa-xmark"></i>
  </button>
</div>
  </div>
    ';
} elseif ($error == "logined") {
  echo '
    <div class="video-box popup">
<div class="alert alert-success" role="alert">
  You have successfully logined your account!
  <button class="btn btn-cross">
  <i class="fa-solid fa-xmark"></i>
  </button>
</div>
  </div>
    ';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Mote Shop</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=ADLaM+Display&family=Open+Sans:ital,wght@1,500&family=Poppins&family=Roboto+Condensed&family=Titan+One&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/style.css" />

  <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.theme.default.min.css" />
</head>

<body>

  <div class="banner bg-secondary">
    <p class="f-open fw-bold text-center text-black h6 py-1">
      Get 15% OFF on your frist order.Signup Now! Enjoy FREE shipping.
    </p>
  </div>
  <nav class="navbar navbar-expand-lg navbar-light bg-primary d-flex justify-content-between">
    <div class="container">
      <a class="navbar-brand f-titan text-white logo" href="#" id="home">Mote</a>
      <button class="navbar-toggler border-0 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Shop
              <i class="fa-solid fa-chevron-down" id="dropdown"></i>
            </a>
            <div class="dropdown-menu bg-primary" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Mobiles</a>
              <a class="dropdown-item" href="#">Watches</a>
              <a class="dropdown-item" href="#">Others</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Support</a>
          </li>
        </ul>
        <form class="d-flex nav-form">
          <input class="form" type="search" placeholder="Search" />
          <a class="btn-search" type="submit">
            <i class="fa-solid fa-magnifying-glass"></i>
          </a>
        </form>
        <div class="user-items d-flex justify-content-between">
          <a href="" class="link">
            <i class="fa-regular fa-heart"></i>
          </a>
          <a href="cart.php" class="link">
            <i class="fa-solid fa-cart-shopping"></i>
          </a>
          <a href="<?php
                    if ($_SESSION['user']) {
                      echo 'profile.php';
                    } else {
                      echo 'signup.php';
                    }
                    ?>" class="link">
            <i class="fa-regular fa-user"></i>
          </a>

        </div>
        <?php
        if (isset($_SESSION['user'])) {
          echo '
        <a class="btn btn-danger mx-4 px-2 py-2 text-white" href="php/logout.inc.php">Logout</a>
        ';
        }
        ?>
      </div>
    </div>
  </nav>

  <div class="spinner"></div>
