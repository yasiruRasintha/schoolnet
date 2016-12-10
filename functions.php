<?php
function getCourseId($id, $conn){
	$sql_query = "SELECT cid FROM student WHERE id = '$id' "  ;
	$result = mysqli_query($conn,$sql_query);
	
	if (mysqli_num_rows($result)>0) {
		$row = mysqli_fetch_assoc($result);

	}else{
		echo "no value";

	}
	
    
	return $row["cid"];
}


function getCourseSubject($course_id,$conn) {
	$sql_query="SELECT subject_list FROM courses WHERE cid = '$course_id'";
	$result = mysqli_query($conn,$sql_query);
	if (mysqli_num_rows($result)>0) {
		$row1 = mysqli_fetch_assoc($result);
	    $subjectArray =[];
	    $subjectArray = explode(',',  $row1["subject_list"]);

	}else{
		echo "no vqlue";

	}

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


































































































































































































































