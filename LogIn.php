<?php   
$host = "localhost";
$email="root";
$password="";
$db="pet";


$conn = new mysqli('localhost','root', '','pet');
if($conn->connect_error){
	echo"$conn->connect_error";
	die("Connection Failed: ". $conn->connect_error);
} else{
	$stmt = $conn->prepare("insert into login(email, password) values(?, ?)");
	$stmt->bind_param("ss",$email,$password1);
	$execval = $stmt->execute();
	echo $execval;
	echo "Log In Success!!";
	$stmt->close();
	$conn->close();
}

?>