<?php
	include('dbconnect.php');

	if($_SERVER['REQUEST_METHOD'] == 'GET') {

		$q = $_GET['q'];

		// echo "Search : ";
		// echo $q;
		// echo $sql;


		$sql = "SELECT * FROM tbl_purohit INNER JOIN tbl_location ON tbl_purohit.location_id = tbl_location.id AND tbl_location.name LIKE '%".$q."%'";

		$result = mysqli_query($con,$sql);

		while($row = mysqli_fetch_array($result)){
			echo $row[1];
			echo $row[2];
			echo $row[3];
			echo $row[4];
			echo $row[5];
			echo $row[9];

			echo "<br>";
		}
	}

?>