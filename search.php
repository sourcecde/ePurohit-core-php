<?php
include('includes/dbconnect.php');
if(isset($_POST["query"])){
	$output = '';
	$sql="SELECT * FROM `tbl_location` WHERE name LIKE '%".$_POST["query"]."%'";
	$result = mysqli_query($con,$sql);
	$output = '<ul id="suggestion">';

	if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_array($result)){
			$output .='<li>'.$row["name"].'</li>';
		}
	}else{
		$output .= '<li>Not Found</li>';
	}

	$output .= '</ul>';
	echo $output;
}
else{
	
	if($_SERVER['REQUEST_METHOD'] == 'GET'){
		$output = '';
	$sql="SELECT * FROM `tbl_location` WHERE name LIKE '%".$_GET["query"]."%'";
	$result = mysqli_query($con,$sql);
	$output = '<ul id="suggestion_item">';

	if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_array($result)){
			$output .='<li>'.$row["name"].'</li>';
		}
	}else{
		$output .= '<li>Not Found</li>';
	}

	$output .= '</ul>';
	echo $output;
	}
}
?>