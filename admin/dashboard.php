<?php
session_start();

if (!isset($_SESSION['username'])) {
  header('Location: index.php'); 
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <script src="../script.js"></script>
    <title>Travel and Tourism</title>
</head>
<body>

  <h1>Admin Dashboard</h1>

  <h2>Booked Packages</h2>

  <table>
    <thead>
        <!-- Sample package entries -->
      <tr>
        <th>Package Name</th>
        <th>Customer Name</th>
        <th>Booking Date</th>
        <th>Status</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Package 1</td>
        <td>John Doe</td>
        <td>2024-01-20</td>
        <td>Confirmed</td>
        <td><a href="#">View Details</a> | <a href="#">Cancel</a></td>
      </tr>
      <tr>
        <td>Package 2</td>
        <td>Jane Smith</td>
        <td>2024-01-18</td>
        <td>Pending</td>
        <td><a href="#">View Details</a> | <a href="#">Confirm</a></td>
      </tr>
      </tbody>
  </table>

  <div class="passenger-details">
    <h2>Passenger Details and ID</h2>

  <!-- Form for uploading files -->
  
    <form id="uploadForm">
      <input type="file" name="fileToUpload" id="fileToUpload">
      <input type="submit" value="Upload" name="submit">
    </form>
  
     <!-- Display upload status -->

    <div id="uploadStatus"></div>
  </div>

  <!-- Footer with contact information -->




  <footer>
    <div>
        <p>For inquiries, please <a href="https://github.com/pentestingg092/website-sourcecode.git">contact us</a>.</p>
    </div>
</footer>
<!--source code link-->

 <!--ftplogin ftpuser kali@887KALI-->
</body>
</html>
