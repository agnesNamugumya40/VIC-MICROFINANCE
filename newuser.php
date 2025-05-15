<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Add New User - Vic Microfinance</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"/>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="bg-blue-50 text-gray-800">
  <header class="bg-blue-700 text-white p-4 text-xl font-semibold">
    Vic Microfinance - Add User
  </header>

  <main class="p-6 max-w-xl mx-auto">
    <h2 class="text-2xl font-bold text-blue-700 mb-6">Register New User</h2>

    <form id="addUserForm" class="bg-white shadow-md rounded-lg p-6 space-y-4">
      <div>
        <label for="accountNo" class="block font-medium text-blue-700">Account Number</label>
        <input type="text" id="accountNo" name="accountNo" class="w-full border rounded px-4 py-2" required>
      </div>

      <div>
        <label for="firstname" class="block font-medium text-blue-700">First Name</label>
        <input type="text" id="firstname" name="firstname" class="w-full border rounded px-4 py-2" required>
      </div>

      <div>
        <label for="lastname" class="block font-medium text-blue-700">Last Name</label>
        <input type="text" id="lastname" name="lastname" class="w-full border rounded px-4 py-2" required>
      </div>

      <div>
        <label for="phone" class="block font-medium text-blue-700">Phone Number</label>
        <input type="text" id="phone" name="phone" class="w-full border rounded px-4 py-2" required>
      </div>

      <div>
        <label for="email" class="block font-medium text-blue-700">Email</label>
        <input type="email" id="email" name="email" class="w-full border rounded px-4 py-2" required>
      </div>

      <div>
        <label for="deposit" class="block font-medium text-blue-700">Initial Deposit</label>
        <input type="number" id="deposit" name="deposit" class="w-full border rounded px-4 py-2" required>
      </div>

      <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">Add User</button>
    </form>

    <div id="responseMsg" class="mt-4 text-lg font-semibold text-center"></div>
  </main>

  <script>
    $('#addUserForm').on('submit', function(e) {
      e.preventDefault();

      $.ajax({
        url: 'add_user.php',
        type: 'POST',
        data: $(this).serialize(),
        success: function(response) {
          $('#responseMsg').text(response).css('color', 'green');
          $('#addUserForm')[0].reset();
        },
        error: function(xhr, status, error) {
          $('#responseMsg').text("An error occurred: " + error).css('color', 'red');
        }
      });
    });
  </script>
</body>
</html>
