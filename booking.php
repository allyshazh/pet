<?php
require "connect.php";

if (isset($_POST['save'])){
  $name =  $_POST['name'];
  $type = $_POST['type'];
  $remark =  $_POST['remark'];
  $num = $_POST['num'];
  $dates = $_POST['dates'];
  $daten = $_POST['daten'];
  $gender = $_POST['gender'];

  $sql = "INSERT INTO booking (name,type,remark,num,dates,daten,gender) VALUES ('$name', '$type', '$remark', '$num', '$dates', '$daten', '$gender')";
  $execute = mysqli_query($connect,$sql) or die(mysqli_error($connect));

  if ($execute) {
    echo "<script type='text/javascript'>alert('Submission success!')</script>";
    header('Location:complete.php');
  }
  else{
    echo "<script type='text/javascript'>alert('Sorry. Try again!')</script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="style_booking.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel = "stylesheet" href = "bookingStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
     <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
     <link href="https://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css" rel="stylesheet">
   </head>

<body>
  <nav>
    <div class = "topnav">
        <div class = "logo">
            <img src="Images/petLogo.png" width = "260px" height = "170px"></label>
        </div>

    <!-- Right-sided topnav / link to redirect to another page-->
    <b><a href = "Registeration.html" class = "w3-bar-item ws-button"><i class = "fa fa-user-plus w3-text-white"></i> CREATE ACCOUNT</a>
    <a href = "contact_us.php" class = "w3-bar-item ws-button"><i class = "fa fa-phone w3-text-white"></i> CONTACT US</a>
    <a href = "booking.php" class = "w3-bar-item ws-button"><i class = "fa fa-folder w3-text-white"></i> BOOK APPOINTMENT</a>
    <a href = "LogIn.html" class = "w3-bar-item ws-button"><i class = "fa fa-user-circle w3-text-white"></i> SIGN IN</a>
    <a href = "homePage.html" class = "w3-bar-item ws-button"><i class = "fa fa-home w3-text-white"></i> HOME</a>
    </b>
    </div>
</nav>
</body>


<body2>
  <div class="container">
    <div class="title">Booking Form</div>
    <div class="content">
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Pet's Name</span>
            <input type="text" name="name" placeholder="Enter your pet's name" required>
          </div>
          <div class="input-box">
            <span class="details">Pet Type</span>
            <input type="text" name="type" placeholder="Cat? Dog? Reptile?" required>
          </div>
          <div class="input-box">
            <span class="details">Remarks</span>
            <input type="text" name="remark" placeholder="Tell us anything we should know!" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number (60+)</span>
            <input type="text" name="num" placeholder="In case of emergency" required>
          </div>
          <div class="input-box">
            <span class="details">Start Date</span>
            <input type="date" id="start" name="dates" placeholder="Choose a date" required>
          </div>
          <div class="input-box">
            <span class="details">End Date</span>
            <input type="date" id ="end" name="daten" placeholder="Choose a date" required>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" id="dot-1" name="gender" value="Male"> 
          <input type="radio" id="dot-2" name="gender" value="Female">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          </div>
        </div>
        <div class="button">
        <input type="submit" name="save" value="Book!">
        </div>
      </form>
    </div>
  </div>
</body2>

  <!-- Footer -->
  <footer>

<div class = "footer">
      <div class = "footer-bottom">
      <p style = "text-align: center;">
      <span style = "color: #71b7e6">&copy; 2021</span>
      <span style = "color: #e6de71"> | Petcare</span>
      </p>
      </div>
</div>
</footer>
</html>