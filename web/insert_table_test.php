<?php
include("config_database.php");

// https://phpdelusions.net/pdo_examples/insert 
try {
  $name = 'John';
  $email = 'john@example.com';
  $sql = "INSERT INTO test (name, email) VALUES (?,?)";
  $conn->prepare($sql)->execute([$name, $email]);
  echo "New record created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>