<?php

session_start();
if($_SESSION["login"]!=1){
	header('Location: '.'index.html');
}
include 'functions.php';
include 'dbcon.php';
	
$conn = getConnection();




?>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
		<link href="css/stylesheet.css" rel="stylesheet">
	<script src="js/jquery-2.2.3.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<title>Home</title>

</head>

<body>
<div id="wrapper">
	<div id="header">
		<?php
		require 'navbar.php';
		?>
		<div class="log">
		<?php
		echo "Logged in as ".$_SESSION["email"];
		echo "".$_SESSION["id"];

		?>
		</div>
	</div>
	<div id="content">
		
		<div class="col-md-3 sidebar">
			<div class="courses">
			      <h3>Your courses</h3>
			      <ul>
				<?php
				$subjectArray=getCourseSubject($sql_query2,$conn);
				$c = count($subjectArray);

				for($i=0;$i<$c;$i++){
					$subject_id= $subjectArray[$i];
					$subjectName= getSubject($subject_id,$conn);
					echo '<li><a href="#">'.$subjectName.'</a> </li>' ; 
				} 









				?>
					</ul>
						
					

							
				
			</div>

		</div>


	</div>
	<div id="footer">
	<?php
	
	require 'footer.php';
		?>
	</div>
</div>





 
</body>

<style type="text/css">
.sidebar{
	

	background-color: #d9d9d9;
	height:750px;
	width:250px;
	margin-top: 0px;
}



.log {
		color: #00cc44 ;
		text-align: right;	
		font-size: 18px;
}

</style>

</html>