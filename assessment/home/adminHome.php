<!DOCTYPE html>
<html>	
	<?php 
		include "../includes/admin-navbar.php";
		include "../db_handler.php"; 
	?>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style.css?<?php echo time(); ?> /">
		<link rel="stylesheet" href="css/style1.css?<?php echo time(); ?> /">
		<link rel="stylesheet" href="css/tile.css?<?php echo time(); ?> /">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script> 
		<title>Home</title>
	</head>
	<body>
		<div class="container">
			<div class="wrapper">
			<h1>USER MANAGEMENT
			<?php 
				if (isset($_GET['id'])) {
					$user = mysqli_real_escape_string($conn, $_GET['id']);
					$sql = "SELECT * FROM users WHERE username = '$user'"; 
					$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
				
			        while($row = mysqli_fetch_array($result)) { 
			        	$name = $row['name'];
						echo " " . $name . " (Admin)";
					}
				}
			?>
		</h1>
		<hr>

			<div class="col-md-6">
				<button type="button" class="btn btn-primary btn-lg "><a href="../admin/view-users.php">View Users</a></button>
				<button type="button" class="btn btn-warning btn-lg"><a href="../admin/add-user.php">Add User</a></button>
			</div>	
		</div>
	</body>
	</div>
</html>

<style type="text/css">
	a, a:hover, a:active, a:visited { 
		color: white;
	}
</style>