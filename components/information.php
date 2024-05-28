<?php
// Include the configuration file
require_once "../configuration/config.php";

// Initialize variables
$fullName = $department = $college = $problemTitle = $comment = "";
$successMessage = $errorMessage = "";

// Function to handle sending the information
function sendInformation($fullName, $department, $college, $problemTitle, $image, $comment, $conn) {
  // Validate data
  if (empty($fullName) || empty($problemTitle)) {
    throw new Exception("Please fill in all required fields.");
  }

  // Escape special characters to prevent SQL injection
  $fullName = mysqli_real_escape_string($conn, $fullName);
  $department = mysqli_real_escape_string($conn, $department);
  $college = mysqli_real_escape_string($conn, $college);
  $problemTitle = mysqli_real_escape_string($conn, $problemTitle);
  $comment = mysqli_real_escape_string($conn, $comment);

  // Image handling
  $imagePath = "";
  if (!empty($image["name"])) {
    $imageName = uniqid() . "." . pathinfo($image["name"], PATHINFO_EXTENSION);
    $targetPath = "../uploads/" . $imageName;
    if (move_uploaded_file($image["tmp_name"], $targetPath)) {
      $imagePath = $targetPath;
    } else {
      throw new Exception("There was an error uploading the image.");
    }
  }

  // Construct the SQL query
  $sql = "INSERT INTO sent_information (full_name, department, college, problem_title, image, comment, sent_date) VALUES ('$fullName', '$department', '$college', '$problemTitle', '$imagePath', '$comment', NOW())";

  // Execute the query
  if (mysqli_query($conn, $sql)) {
    return "Information sent successfully!";
  } else {
    throw new Exception("Error sending information: " . mysqli_error($conn));
  }
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve form data
  $fullName = $_POST["full_name"];
  $department = $_POST["department"];
  $college = $_POST["college"];
  $problemTitle = $_POST["problem_title"];
  $image = $_FILES["image"];
  $comment = $_POST["comment"];

  // Call the function to send information
  try {
    $successMessage = sendInformation($fullName, $department, $college, $problemTitle, $image, $comment, $conn);
  } catch (Exception $e) {
    $errorMessage = "Error: " . $e->getMessage();
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MustsoUpdate-Group 5</title>
  <link rel="icon" type="image/x-icon" href="../asset/image/images.png" />
  <link rel="stylesheet" href="../asset/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/sheet.css">
  <style>
    body {
      font-family: 'Roboto', sans-serif;
    }
    @media screen and (max-width: 600px) {
      form {
        padding-top: 20%;
        position: relative;
      }
    }
  </style>
</head>
<body>

<header class="text-center text-white">
  <?php include("../navbars/navbar2.php")?>
</header>

<section style="margin-top:10%;position:relative" id="contact">
  <div class="container px-5">
    <div class="row gx-5 align-items-center">
      <?php if (!empty($successMessage)): ?>
        <div class="alert alert-success" role="alert">
          <?php echo $successMessage; ?>
        </div>
      <?php endif; ?>

      <?php if (!empty($errorMessage)): ?>
        <div class="alert alert-danger" role="alert">
          <?php echo $errorMessage; ?>
        </div>
      <?php endif; ?>

      <form method="post" enctype="multipart/form-data" action="#contact">
        <div class="form-group row">
          <label for="full_name" class="col-sm-2 col-form-label">Full Name:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="full_name" name="full_name" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="department" class="col-sm-2 col-form-label">Department:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="department" name="department" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="college" class="col-sm-2 col-form-label">College:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="college" name="college" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="problem_title" class="col-sm-2 col-form-label">Problem Title:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="problem_title" name="problem_title" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="image" class="col-sm-2 col-form-label">Image:</label>
          <div class="col-sm-10">
            <input type="file" class="form-control-file" id="image" name="image" accept="image/*" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="comment" class="col-sm-2 col-form-label">Comment:</label>
          <div class="col-sm-10">
            <textarea class="form-control" id="comment" name="comment" rows="2"></textarea>
          </div>
        </div>
        <div style="width: 100%;justify-content:center;display:flex">
          <button style="margin-bottom:5px" type="submit" class="btn btn-primary">SEND MESSAGE</button>
        </div>
      </form>
    </div>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="../js/scripts.js"></script>

</body>
</html>
