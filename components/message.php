

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MustsoUpdate-Group 5</title>
  <link rel="icon" type="image/x-icon" href="../asset/image/images.png" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<?php include("../navbars/navbar3.php") ?>
  <div class="container py-5">
    <h1 class="mt-5 mb-4">Contact Messages</h1>
    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Full Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Message</th>
          </tr>
        </thead>
        <tbody>
          <?php
          // Establish database connection
          require_once "../configuration/config.php";

          // Fetch data from the contact_info table
          $sql = "SELECT * FROM contact_info";
          $result = $conn->query($sql);

          // Check if there are any rows in the result
          if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
              echo "<tr><td>" . htmlspecialchars($row["full_name"]) . "</td><td>" . htmlspecialchars($row["email"]) . "</td><td>" . htmlspecialchars($row["phone_number"]) . "</td><td>" . htmlspecialchars($row["message"]) . "</td></tr>";
            }
          } else {
            echo "<tr><td colspan='4'>No messages found</td></tr>";
          }

          // Close database connection
          $conn->close();
          ?>
        </tbody>
      </table>
    </div>
  </div>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="./js/scripts.js"></script>
</body>
</html>
