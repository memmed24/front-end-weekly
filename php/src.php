<?php 

	function my_txt(){
		include 'db.php';
		$sql = "SELECT txt FROM projectx";
		$query = mysqli_query($db_connection, $sql);
	
		while ($row = mysqli_fetch_assoc($query)) {
		foreach ($row as $key => $value) {
			echo $value;
			}
		}
	}

	function my_header(){
		include 'db.php';
		$sql = "SELECT header FROM projectx";
		$query = mysqli_query($db_connection, $sql);
	
		while ($row = mysqli_fetch_assoc($query)) {
		foreach ($row as $key => $value) {
			echo $value;
			}
		}
	}

	function my_pic(){
		include 'db.php';
		$sql = "SELECT photo FROM projectx";
		$query = mysqli_query($db_connection, $sql);
	
		while ($row = mysqli_fetch_assoc($query)) {
		foreach ($row as $key => $value) {
			echo "/".$value.".jpg";
			}
		}
	}
	var_dump(my_pic()); 
?>