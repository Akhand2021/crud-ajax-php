<?php
include "db.php";
$name = $_POST['name'];
$email = $_POST['email'];

$stmt = $pdo->prepare('INSERT INTO users (name, email) VALUES (?, ?)');
$result = $stmt->execute([$name, $email]);

if ($result) {
  $id = $pdo->lastInsertId();
  echo '<tr data-id="'.$id.'"><td>'.$id.'</td><td class="name">'.$name.'</td><td class="email">'.$email.'</td><td><button class="editBtn" data-id="'.$id.'" data-name="'.$name.'" data-email="'.$email.'">Edit</button><form id="deleteUserForm" method="POST">
  <input type="hidden" id="deleteUserId" value="' . $id . '" name="id">
  <button type="submit" id="deleteUserBtn">Delete User</button>
</form></td></tr>';
} else {
  echo 'Error creating user';
}
