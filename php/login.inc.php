
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  require 'functions.inc.php';
  $error;
  // Sanitize user inputs
  $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
  $password = $_POST['password'];

  // Check if the connection is successful
  if ($db->con->connect_error) {
    die("Connection Error!" . $db->con->connect_error);
  } elseif (empty($email) or empty($password)) {
    $login = false;
    $error = 'emptyInput';
    header("Location:../login.php?error=$error");
  } else {
    $dbsql = "SELECT * FROM users WHERE email=?";
    $dbstmt = $db->con->prepare($dbsql);

    if (!$dbstmt) {
      die("Prepare failed: (" . $db->con->errno . ") " . $db->con->error);
    }

    $dbstmt->bind_param('s', $email);
    $dbstmt->execute();

    $result = $dbstmt->get_result();

    if ($result->num_rows > 0) {
      $user = $result->fetch_assoc();
      $storedPwd = $user['password'];

      $login = false;
      if (password_verify($password, $storedPwd)) {
        $login = true;
        $error = "noError";
        ini_set('session.gc_maxlifetime', 30 * 24 * 60 * 60);
        session_start();
        $_SESSION['user'] = $email;
        setcookie($_SESSION['user'], time() + 30 * 86400);
        header("Location:../index.php?error=$error");
      } else {
        $error = "invalidPwd";
        header("Location:../login.php?error=$error");
      }
    } else {
      $error = "invalidUser";
      header("Location:../login.php?error=$error");
    }

    $dbstmt->close();
    $db->con->close();
  }
} else {
  header("Location: ../login.php");
}
?>

