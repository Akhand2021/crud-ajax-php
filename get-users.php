<?php
include "db.php";
$stmt = $pdo->query('SELECT * FROM users');

while ($row = $stmt->fetch()) {
    echo '<tr data-id="' . $row['id'] . '"><td>' . $row['id'] . '</td><td class="name">' . $row['name'] . '</td><td class="email">' . $row['email'] . '</td><td><button class="editBtn" data-id="' . $row['id'] . '" data-name="' . $row['name'] . '" data-email="' . $row['email'] . '">Edit</button> <form id="deleteUserForm" method="POST">
    <input type="hidden" id="deleteUserId" value="' . $row['id'] . '" name="id">
    <button type="submit" id="deleteUserBtn">Delete User</button>
  </form></td></tr>';
}
