<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1>Admin panel</h1>
		
		<div class="table-responsive">
			<table class="table table-striped table table-bordered">
				<?php  
					include 'db.php';

					if($db_connection){
						$sql = "SELECT * FROM projectx";
						$query = mysqli_query($db_connection, $sql);
					}
				?>
				<thead>
					<tr>
						<td>ID</td>
						<td>Header</td>
						<td>Text</td>
						<td>Picture</td>
						<td>Action</td>
					</tr>
				</thead>
				<?php  
					while ($row = mysqli_fetch_assoc($query)) { ?>
						<tr>
							 <?php foreach ($row as $key => $value) { ?>
                      			<td><?php echo $value; ?> </td>
                   			 <?php } ?>
                   			 <td><a id="update" class="btn btn-success" href='update.php?id=<?= $row['id']?>'>Update</a></td>
						</tr>
					<?php }
				?>
			</table>			
		</div>
	</div>
</body>
</html>