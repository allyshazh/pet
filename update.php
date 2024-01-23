<?php
require "connect.php";
$id = $_GET['id'];
$sql_read = "SELECT * FROM booking WHERE id = '$id'";
$exe_read = mysqli_query($connect, $sql_read);
$res_read = mysqli_fetch_assoc($exe_read);

if (isset($_POST['update'])) {
  $val_id = $_POST['id_input'];
  $val_name = $_POST['name_input'];
  $val_type = $_POST['type_input'];
  $val_remark = $_POST['remark_input'];
  $val_num = $_POST['num_input'];
  $val_dates = $_POST['dates_input'];
  $val_daten = $_POST['daten_input'];
  $val_gender = $_POST['gender_input'];

  $sql = "UPDATE booking SET
    id = '$val_id',
    name = '$val_name',
    type = '$val_type',
    remark = '$val_remark',
    num = '$val_num',
    dates = '$val_dates',
    daten = '$val_daten',
    gender = '$val_gender' WHERE id='$id'";

  $execute = mysqli_query($connect, $sql);

  if ($execute) {
    header('Location:display.php');
  } else {
    echo "Updating data failed.";
  }
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Updating</title>
  <link rel="stylesheet" href="updateStyle.css">
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
      <h1 style = "text-align: center; color: #e6de71; font-size : 50px;">Update Section</h1>
      <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
        <br><table border="1">

          <tr>
            <td><label>Booking ID</label></td>
            <td><input type="text" name="id_input" value="<?= $res_read['id'] ?>"></td>
          </tr>

          <tr>
            <td> <label>Pet's Name</label> </td>
            <td> <input type="text" name="name_input" value="<?= $res_read['name'] ?>"> </td>
          </tr>

          <tr>
            <td> <label>Pet's Type</label> </td>
            <td> <input type="text" name="type_input" value="<?= $res_read['type'] ?>"> </td>
          </tr>

          <tr>
            <td> <label>Remark</label> </td>
            <td> <input type="text" name="remark_input" value="<?= $res_read['remark'] ?>"> </td>
          </tr>

          <tr>
            <td> <label>Phone Number (60+)</label> </td>
            <td> <input type="text" name="num_input" value="<?= $res_read['num'] ?>"> </td>
          </tr>

          <tr>
            <td><label>Start Date</label></td>
            <td><input type="date" name="dates_input" value="<?= $res_read['dates'] ?>"></td>
          </tr>

          <tr>
            <td><label>End Date</label></td>
            <td><input type="date" name="daten_input" value="<?= $res_read['daten'] ?>"></td>
          </tr>

          <tr>
            <td> <label>Gender</label> </td>
            <td> <input type="text" name="gender_input" value="<?= $res_read['gender'] ?>"> </td>
          </tr>

          <tr>
            <td colspan="2" align="center"> <input type="submit" name="update" value="Update"> </td>
          </tr>
        </table>
      </form>
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

  </footer>
</body>

</html>