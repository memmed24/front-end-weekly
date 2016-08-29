<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style>
	li{
		display: block;
	}
	li:nth-child(even){
		background-color: #E2E3E2;
	}
	input{
		display: block;
		margin-bottom: 10px;
		padding: 15px 50px 15px 5px;
	}
</style>
<body>
	<h2>Update a Customer</h2>
	<form action="" method="post" enctype="multipart/form-data">
		<input type="text" name="header" placeholder="New Header..." > <br>
		<!-- <input type="text" name="email" placeholder="New Picture src..." > -->
		<input type="text" name="txt" placeholder="New Text..." > <br>
		<input type="file" name="picture"> <br>
		<input type="submit" name="update" value="update">
	</form>
	<form action="admin.php">
		<input type="submit" value="back">
	</form>
	<?php 
	include "db.php";
	
		if (isset($_POST['update'])) {
			$id = $_GET['id'];
			$new_header = $_POST['header'];	
			//$new_email = $_POST['email'];
			$new_txt = $_POST['txt'];
			$file = $_FILES['picture'];
			$target_dir = "upload/";
			$target_file = $target_dir.basename($file['name']);

			move_uploaded_file($file['tmp_name'], $target_file);

			if(!empty($new_header)&&!empty($new_txt)&&!empty($file)){

					$sql = "UPDATE projectx SET header='$new_header', txt='$new_txt', photo='$target_file' WHERE id='$id'";
					$query = mysqli_query($db_connection, $sql);
					if ($query) {
						header('Location: admin.php');
					}else{
						echo "error launched";
					}
			}else{
				echo "error";
			}
		}
	 ?>
		
</body>
</html>