<?php 
session_start();
echo "loading";
include "dbcon.php";
if ($_POST ["submit"]=="Sign-in") {
	$email = $_POST["email"];
	$email = mysql_real_escape_string($email);
	$password=$_POST["password"];
	$password = mysql_real_escape_string($password);
	
}
//var_dump($_POST);
$search_password= "SELECT id,password from student WHERE email= '$email'";
//$search_password = mysql_real_escape_string($search_password);

$conn = getConnection();
$result=mysqli_query($conn,$search_password);

if(mysqli_num_rows($result) > 0) {
	$row = mysqli_fetch_assoc($result); 
	
	if(password_verify ($password,$row["password"])){
		header('Location: '.'home.php');
		$_SESSION["email"]= $email ;
		$_SESSION["id"]=$row["id"];
		$_SESSION["login"]=1;
		



	}else{
		header('Location: '.'index.html');

	}
}
else {
echo "The password and username does not match!";
header('Location: '.'index.html');

}
//$2y$10$Vz4JyvyHpLdwsu.vSbSgSuuhjZxBlkp.KEfZbNXVpMny7/CGZCK6m
/*if(password_verify ( $password,$hash )){
		header('Location: '.'home.php');

}

else {
	
}
*/
?>		
