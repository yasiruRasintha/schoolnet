<html>
  
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.css" rel="stylesheet">
	<script src="js/jquery-2.2.3.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<title>
		code school
	</title>

</head>


<?php
include "dbcon.php";
//var_dump($_POST);

if ($_POST["submit"]=="Sign-up") {
	$name=$_POST["name"];
	
	$email=$_POST["email"];

	$phone=$_POST["phone-num"];

	$password=$_POST["password"];

	$hash=password_hash($password, PASSWORD_DEFAULT);
	
}
$conn = getConnection();
$search_email= "SELECT id FROM student WHERE email= '$email' ";
$result=mysqli_query($conn,$search_email);


echo mysqli_num_rows($result);
if (mysqli_num_rows($result)==0) {
	$sql = "INSERT INTO student (fullname,email,phoneNumber,password) VALUES ('$name','$email','$phone','$hash')";

		if(mysqli_query($conn, $sql)) {
			?>
			<div class="alert alert-success" role="alert">Well Done!Your account has been successfully created!!!</div>


			<?php
		}	else {
			?>
			<div class="alert alert-danger" role="alert">Sorry for the inconvenience caused</div>
			<?php
		}
}else{


	?>
	<div class="alert alert-danger" role="alert">you are already registered</div>
<?php }


//mysqli_close($conn);

?>
