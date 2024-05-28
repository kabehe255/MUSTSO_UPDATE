<?php
// Include the configuration file
require_once "../configuration/config.php";

// Function to retrieve information
function getInformation($conn) {
    // Construct the SQL query
    $sql = "SELECT * FROM sent_information";

    // Execute the query
    $result = mysqli_query($conn, $sql);

    // Check if there are results
    if (mysqli_num_rows($result) > 0) {
        // Return the result set
        return $result;
    } else {
        return [];
    }
}

// Call the function to retrieve information
$infoResult = getInformation($conn);

?>
<?php
session_start();

// Check if user is not authenticated, redirect to login page
if (!isset($_SESSION["authenticated"]) || $_SESSION["authenticated"] !== true) {
    header("Location: login.php");
    exit();
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
  <style>
    body {
      font-family: 'Roboto', sans-serif;
    }
    @media screen and (max-width:600px) {
      table {
        font-size: 0.8rem;
      }
    }
    img {
      max-width: 100px;
      height: auto;
    }
  </style>
</head>
<body>
  <header class="text-center text-white">
    <?php include("../navbars/navbar3.php") ?>
  </header>
  <section style="margin-top:10%; position:relative">
    <div class="container px-5">
      <div class="row gx-5 align-items-center">
        <div class="col-12">
          <h2 class="text-center mb-4 py-5">Submitted Information</h2>
          <div class="table-responsive">
            <table class="table table-bordered table-striped">
              <thead class="thead-dark">
                <tr>
                  <th>Full Name</th>
                  <th>Department</th>
                  <th>College</th>
                  <th>Problem Title</th>
                  <th>Image</th>
                  <th>Comment</th>
                  <th>Sent Date</th>
                </tr>
              </thead>
              <tbody>
                <?php if ($infoResult && mysqli_num_rows($infoResult) > 0): ?>
                  <?php while($row = mysqli_fetch_assoc($infoResult)): ?>
                    <tr>
                      <td><?php echo htmlspecialchars($row['full_name']); ?></td>
                      <td><?php echo htmlspecialchars($row['department']); ?></td>
                      <td><?php echo htmlspecialchars($row['college']); ?></td>
                      <td><?php echo htmlspecialchars($row['problem_title']); ?></td>
                      <td>
                        <?php if (!empty($row['image'])): ?>
                          <img src="<?php echo htmlspecialchars('../uploads/' . basename($row['image'])); ?>" alt="Image">
                        <?php else: ?>
                          No Image
                        <?php endif; ?>
                      </td>
                      <td><?php echo htmlspecialchars($row['comment']); ?></td>
                      <td><?php echo htmlspecialchars($row['sent_date']); ?></td>
                    </tr>
                  <?php endwhile; ?>
                <?php else: ?>
                  <tr>
                    <td colspan="7" class="text-center">No information found.</td>
                  </tr>
                <?php endif; ?>
              </tbody>
            </table>
           
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../js/scripts.js"></script>
</body>
</html>
