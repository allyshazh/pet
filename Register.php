<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];

//database connection
$conn = new mysqli('localhost','root', '','pet');
if($conn->connect_error){
	echo"$conn->connect_error";
	die("Connection Failed: ". $conn->connect_error);
} else{
	$stmt = $conn->prepare("insert into registrationoke(firstname, lastname, email, phone, password1, password2) values(?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("sssiss",$firstname,$lastname,$email,$phone,$password1,$password2);
	$execval = $stmt->execute();
	echo $execval;
	echo "Success!!";
	$stmt->close();
	$conn->close();
}

?>