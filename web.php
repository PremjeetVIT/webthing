
<?php include 'database.php'; ?>
<?php

	if(isset($_GET['name']) && isset($_GET['txtarea'])){
		$name = mysqli_real_escape_string($con, $_GET['name']);
		$txtarea = mysqli_real_escape_string($con, $_GET['txtarea']);
		$date = mysqli_real_escape_string($con, $_GET['date']);
		

			$query = "INSERT INTO webtab (name,message,date)VALUES('$name', '$txtarea', '$date');";
		if (!mysqli_query($con, $query)) {
			echo "Error: ".mysqli_error($con);
		}
		else{
			// echo '<li>'.$name.': '.$txtarea.'['.$date.']</li>';
		}
	}
?>

