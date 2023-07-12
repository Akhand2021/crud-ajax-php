<?php 
include "db.php";
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];

$stmt = $pdo->prepare('UPDATE users SET name = ?, email = ? WHERE id = ?');
$result = $stmt->execute([$name, $email, $id]);

if ($result) {
  echo json_encode(['id' => $id, 'name' => $name, 'email' => $email]);
} else {
  echo 'Error updating user';
}
