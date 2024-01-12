<?php
require 'functions.inc.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $hashPwd = password_hash($password, PASSWORD_DEFAULT);

  if ($db->con->connect_error) {
    header("Location:../index.php");
  } else {
    $error = "";
    $register = true;
    $checksql = "SELECT * FROM users WHERE email=?";
    $checkstmt = $db->con->prepare($checksql);
    $checkstmt->bind_param('s', $email);
    $result = $checkstmt->execute();
    if ($result) {
      $checkstmt->store_result();
      if ($checkstmt->num_rows > 0) {
        $register = false;
        $error = "userExists";
      }
    } else {
      header("Location:../signup.php");
    }

    if (empty($email) || empty($password)) {
      $register = false;
      $error = "emptyInput";
      header("Location:http://localhost:8080/signup.php?error=$error");
    } elseif (strlen($password) < 8) {
      $register = false;
      $error = "shortPassword";
      header("Location:http://localhost:8080/signup.php?error=$error");
    }

    if ($register) {
      $sql = "INSERT INTO users(email, password) VALUES(?,?)";
      $stmt = $db->con->prepare($sql);
      $stmt->bind_param('ss', $email, $hashPwd);
      $stmt->execute();
      $error = "noError";
    }

    header("Location:http://localhost:8080/signup.php?error=$error");
  }
} else {
  header("Location:../index.php");
}
