<?php 
session_start();

if (isset($_SESSION['email']) && isset($_SESSION['password'])) {

 ?>

<?php
require "connect.php";
$sql = "SELECT * FROM booking";
$execute = mysqli_query($connect, $sql);
?>

<!DOCTYPE html>
<html>
<a href = "logout.php">LOG OUT</a>

<head>
  <title>Booking Details</title>
  <link rel = "stylesheet" href = "displayStyle.css">
</head>

<body>
<nav>
    <div class="topnav">
      <div class="logo">
        <img src="Images/petLogo.png" width="260px" height="170px"></label>
      </div>
    </div>
  </nav>

  <div class="container">

  <div align="center">
    <br>
    <h1 style = "text-align: center; color: #e6de71; font-size : 50px;">List of Booking</h1>
  
  <br>
  <table border="1" width="80%" align="center">
    <thead>
      <th>Booking ID</th>
      <th>Pet's Name</th>
      <th>Pet's Type</th>
      <th>Remark</th>
      <th>Phone Number (60+)</th>
      <th>Start Date</th>
      <th>End Date</th>
      <th>Gender</th>
      <th>Actions</th>
    </thead>

    <?php while ($result = mysqli_fetch_array($execute)) { ?>
      <tr align="center">
        <td><?= $result['id'] ?></td>
        <td><?= $result['name'] ?></td>
        <td><?= $result['type'] ?></td>
        <td><?= $result['remark'] ?></td>
        <td><?= $result['num'] ?></td>
        <td><?= $result['dates']?></td>
        <td><?= $result['daten']?></td>
        <td><?= $result['gender'] ?></td>
        <td>
          <a href="update.php?id=<?= $result['id'] ?>"><button class="button">Update</button></a>
          |
          <a href="delete.php?id=<?= $result['id'] ?>"><button class="button">Delete</button></a>
        </td>
      </tr>
    <?php } ?>
  </table>
  </div>
  </div>

  <!-- Footer -->
  <div class="footer">
    <div class="footer-bottom">
      <p style="text-align: center;">
        <span style="color: #71b7e6">&copy; 2021</span>
        <span style="color: #e6de71"> | PetCare</span>
      </p>
    </div>
  </div>

</body>

</html>

<?php 
}else{
     header("Location: admin.php");
     exit();
}
 ?>