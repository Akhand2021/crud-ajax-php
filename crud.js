$(document).ready(function() {
  var usersTableTbody = $('#usersTable tbody');
  var createUserForm = $('#createUserForm');
  var updateUserForm = $('#updateUserForm');
  var deleteUserForm = $('#deleteUserForm');

  // Read Operation
  $.ajax({
    url: 'get-users.php',
    type: 'GET',
    success: function(response) {
      // Append the users to the table
      usersTableTbody.append(response);
    },
    error: function(xhr, status, error) {
      console.error(error);
    }
  });
 
  // Create Operation
  $(document).on('submit', '#createUserForm', function(event) {
    event.preventDefault();
    var formData = $(this).serialize();

    $.ajax({
      url: 'create-user.php',
      type: 'POST',
      data: formData,
      success: function(response) {
        // Append the new user to the table
        usersTableTbody.append(response);

        // Clear the input fields
        createUserForm[0].reset();
      },
      error: function(xhr, status, error) {
        console.error(error);
      }
    });
  });

  // Edit Operation
  $(document).on('click', '.editBtn', function(event) {
    event.preventDefault();
    var userId = $(this).data('id');
    var userName = $(this).data('name');
    var userEmail = $(this).data('email');

    // Set the form values
    updateUserForm.find('input[name="id"]').val(userId);
    updateUserForm.find('input[name="name"]').val(userName);
    updateUserForm.find('input[name="email"]').val(userEmail);
  });

  $(document).on('submit', '#updateUserForm', function(event) {
    event.preventDefault();
    var formData = $(this).serialize();

    $.ajax({
      url: 'update-user.php',
      type: 'POST',
      data: formData,
      success: function(data) {
        var response = JSON.parse(data);        
        // Find the row corresponding to the updated user
        var row = usersTableTbody.find('tr[data-id="' + response.id + '"]');

        // Update the name and email columns
        row.find('.name').text(response.name);
        row.find('.email').text(response.email);

        // Clear the input fields
        updateUserForm[0].reset();
      },
      error: function(xhr, status, error) {
        console.error(error);
      }
    });
  });

  // Delete Operation
  $(document).on('submit', '#deleteUserForm', function(event) {
    event.preventDefault();
    var formData = $(this).serialize();

    $.ajax({
      url: 'delete-user.php',
      type: 'POST',
      data: formData,
      success: function(data) {
        var response = JSON.parse(data);   
        // Remove the row corresponding to the deleted user
        usersTableTbody.find('tr[data-id="' + response.id + '"]').remove();

        // Clear the input fields
        deleteUserForm[0].reset();
      },
      error: function(xhr, status, error) {
        console.error(error);
      }
    });
  });
});
