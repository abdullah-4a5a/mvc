<?php
require 'db.php';
$id = $_GET['id'];
$sql = 'DELETE FROM people WHERE id=:id And voorraad > 0';
$statement = $conn->prepare($sql);
if ($statement->execute([':id' => $id])) {
  header("Location: /crud/home.php");
}
