<?php
include "db.php";

$id = $_POST['id'];

$stmt = $pdo->prepare('DELETE FROM users WHERE id = ?');
$result = $stmt->execute([$id]);

if ($result) {
  echo json_encode(['id' => $id]);
} else {
  echo 'Error deleting user';
}