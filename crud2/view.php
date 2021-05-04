<?php 
include "config.php";
// session_start();

//requette pour afficher tous

$sql = "SELECT * FROM users";

//executer

$result = $conn->query($sql);


?>

<!DOCTYPE html>
<html>
<head>
	<title>Page Etudiant</title>
	 <!-- to make it looking good im using bootstrap -->
	 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h2 ><strong>Les Etudiants LSI1 :</strong></h2>
<table class="table">
	<thead>
		<tr>
		<th>ID</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Email</th>
		<th>Gender</th>
		<th>Action</th>
	</tr>
	</thead>
	<tbody>	
		<?php
			if ($result->num_rows > 0) {
				//output data of each row
				while ($row = $result->fetch_assoc()) {
		?>

					<tr>
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['firstname']; ?></td>
					<td><?php echo $row['lastname']; ?></td>
					<td><?php echo $row['email']; ?></td>
					<td><?php echo $row['gender']; ?></td>
					<td><a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
					</tr>
				
					
		<?php		}
			}
		?>
				<!-- <a class="btn btn-info" href="create.php">creer etudiant</a> -->

	        	
	</tbody>
</table>
	</div>
	<div class="col-md-8 text-center">
	<a class="btn btn-info" href="create.php">creer etudiant</a>
	</div>

</body>
</html>