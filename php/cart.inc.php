
<?php
require 'db.inc.php';
$db = new DBConnection();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $id = $_POST['productId'];
  $email = $_POST['user'];

  function checkProduct($db, $id, $email)
  {
    $found = false;
    $check = "SELECT * FROM cart WHERE id=? AND email=?";
    $stmt = $db->con->prepare($check);
    $stmt->bind_param('ss', $id, $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
      $found = true;
    }

    $stmt->close();
    return $found;
  }
  if (empty($email)) {
    header("Location:./signup.inc.php");
  } else {
    $found = checkProduct($db, $id, $email);

    if (!$found) {
      $query = "INSERT INTO cart (id, email) VALUES (?, ?)";
      $stmt = $db->con->prepare($query);
      $stmt->bind_param('ss', $id, $email);
      $stmt->execute();
      $stmt->close();
      echo "success";
    }
  }
}
?>

