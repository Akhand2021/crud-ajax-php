<!-- index.html -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>CRUD Operations</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <style type="text/css">
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 0 auto;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        input[type=text], input[type=email] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 5px;
        }
        button:hover {
            background-color: #3e8e41;
        }
    </style>
</head>
<body>
  
  <!-- Create Operation -->
  <h1 style="text-align: center;">ALgocodersmind.com|CRUD operation in php using jquery Ajax</h1>
  <h2>Create User</h2>
  <form id="createUserForm" method="POST">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name">
    <br><br>
    <label for="email">Email:</label>
    <input type="text" id="email" name="email">
    <br><br>
    <button type="submit" id="addUserBtn">Add User</button>
  </form>
  
  <hr>

  <!-- Read Operation -->
  <h2>Users List</h2>
  <table id="usersTable">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    </tbody>
  </table>

  <hr>

  <!-- Update Operation -->
  <h2>Update User</h2>
  <form id="updateUserForm" method="POST">
    <label for="userId">User ID:</label>
    <input type="text" id="userId" name="id">
    <br><br>
    <label for="userName">Name:</label>
    <input type="text" id="userName" name="name">
    <br><br>
    <label for="userEmail">Email:</label>
    <input type="text" id="userEmail" name="email">
    <br><br>
    <button type="submit" id="updateUserBtn">Update User</button>
  </form>

  <hr>

  <!-- Delete Operation -->
  <h2>Delete User</h2>
  <form id="deleteUserForm" method="POST">
    <label for="deleteUserId">User ID:</label>
    <input type="text" id="deleteUserId" name="id">
    <br><br>
    <button type="submit" id="deleteUserBtn">Delete User</button>
  </form>

  <script src="crud.js"></script>
</body>
</html>
