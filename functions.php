<?php
function getCourseSubject($sql_query,$conn) {
	$sql_query="SELECT subject_list FROM courses WHERE cid = '$sql_query2'";
	$sql_query2="SELECT cid FROM student ";

	$result= mysqli_query($conn,$sql_query);
	if (mysqli_num_rows($result)>0) {
		
		$row1 = mysqli_fetch_assoc($result);
	    $subjectArray =[];
	    $subjectArray = explode(',',  $row1["subject_list"]);

	}else{
		echo "no vqlue";

	}
	
	
	//print_r($subjectArray);
	return $subjectArray;
	
}	

function getSubject($subjectId,$conn){


	$sql_query = "SELECT name FROM subjects WHERE sid='$subjectId'";
	$result= mysqli_query($conn,$sql_query);
	if (mysqli_num_rows($result)>0) {
		
		$row = mysqli_fetch_assoc($result);
	    

	}else{
		echo "no value";

	}
	//echo $row["name"];
	return $row["name"];
	
}

?>


































































































































































































































