<?php
// Initialize variables
$full_name = $email = $phone_number = $message = "";
$errors = []; // Array to store any validation errors
$success = false; // Variable to indicate successful submission

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Database connection
  require_once "./configuration/config.php";

  // Processing form data when form is submitted
  $full_name = trim(htmlspecialchars($_POST['full_name']));
  $email = trim(htmlspecialchars($_POST['email']));
  $phone_number = trim(htmlspecialchars($_POST['phone_number']));
  $message = trim(htmlspecialchars($_POST['message']));

  // Basic validation (can be extended)
  if (empty($full_name)) {
    $errors[] = "Please enter your full name.";
  }
  if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Please enter a valid email address.";
  }
  // Add more validation rules as needed (e.g., phone number format)

  // Only proceed with database insertion if there are no errors
  if (empty($errors)) {
    // Prepare an insert statement
    $sql = "INSERT INTO contact_info (full_name, email, phone_number, message) VALUES (?, ?, ?, ?)";

    if ($stmt = $conn->prepare($sql)) {
      // Check for errors during statement preparation
      if (!$stmt) {
        echo "Error preparing statement: " . $conn->error;
        exit();
      }

      // Bind variables to the prepared statement as parameters
      $stmt->bind_param("ssss", $full_name, $email, $phone_number, $message);

      // Attempt to execute the prepared statement
      if ($stmt->execute()) {
        // Set success to true
        $success = true;
      } else {
        // More specific error handling (avoid revealing details)
        echo "An error occurred while processing your request. Please try again later.";
      }

      // Close statement
      $stmt->close();
    }

    // Close connection
    $conn->close();
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Form</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="./asset/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>

  <div class="container mt-5" id="contact">
    <?php if ($success): ?>
      <div class="alert alert-success" role="alert">
        Your message has been successfully sent!
      </div>
    <?php endif; ?>

    <?php if (!empty($errors)): ?>
      <div class="alert alert-danger" role="alert">
        <ul>
          <?php foreach ($errors as $error): ?>
            <li><?php echo $error; ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    <?php endif; ?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>#contact" method="POST">
      <h2 style="text-align:center;">Let's talk</h2>
      <div class="form-group row">
        <label for="full_name" class="col-sm-2 col-form-label">FName:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="full_name" name="full_name" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="email" class="col-sm-2 col-form-label">Email:</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="email" name="email" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="phone_number" class="col-sm-2 col-form-label">Phone Number:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="phone_number" name="phone_number" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="message" class="col-sm-2 col-form-label">Message:</label>
        <div class="col-sm-10">
          <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
        </div>
      </div>
      <div style="width: 100%;justify-content:center;display:flex">
        <button style="border-radius:20px; background-color:#000;color:#ffff;font-weight:600;border:none" type="submit" class="btn btn-primary">SEND MESSAGE</button>
      </div>
    </form>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
