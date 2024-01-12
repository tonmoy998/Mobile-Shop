<?php
require "functions.inc.php";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $id = $_POST['productId'];
  $email = $_POST['email'];

  $sql = "SELECT * FROM cart WHERE email='{$email}' AND id={$id}";
  $result = $db->con->query($sql);

  if ($result) {
    while ($row = $result->fetch_assoc()) {
      $delete = "delete from cart where id=? and email=?";
      $stmt = $db->con->prepare($delete);
      $stmt->bind_param('ss', $id, $email);
      $stmt->execute();
      if ($stmt->execute()) {
        echo "deleted";
      } else {
        echo "Deletion failed";
      }
      $stmt->close();
    }
  }
}
