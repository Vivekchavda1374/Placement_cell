<?php

require_once("dbConnection.php");

$result = mysqli_query($mysqli, "SELECT * FROM companydetails ORDER BY id DESC");
?>

<html>
<head>	
	<title>Homepage</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
	<style>
		body {
			padding: 20px;
			background-color: #f8f9fa;
		}
		h2 {
			margin-bottom: 20px;
			color: #007bff; /* Blue color */
		}
		.table {
			background-color: #fff;
			border-radius: 10px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		}
		.table th {
			background-color: #007bff; /* Blue color */
			color: #fff;
		}
	</style>
</head>

<body>
	<div class="container">
		<h2>Company Registration</h2>
		<table id="companyTable" class="table table-bordered">
			<thead class="thead-light"> <!-- Bootstrap class for table header -->
				<tr>
					<th>Company Name</th>
					<th>Campus Date</th>
					<th>Last Registration</th>
					<th>Job Profile</th>
					<th>Company Package</th>
					<th>Technical Skills</th>
					<th>Stipend</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
				while ($res = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>".$res['ComapnyName']."</td>";
					echo "<td>".$res['CampaseDate']."</td>";
					echo "<td>".$res['LastRegistration']."</td>";	
					echo "<td>".$res['JobProfile']."</td>";	
					echo "<td>".$res['CompanyPackage']."</td>";	
					echo "<td>".$res['TechSkill']."</td>";	
					echo "<td>".$res['Stipend']."</td>";	
					echo "<td>
							<div class='btn-group'>
								<a href=\"edit.php?id=$res[id]\" class='btn btn-primary'>Edit</a>
								<a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\" class='btn btn-danger'>Delete</a>
							</div>
						</td>";
					echo "</tr>";
				}
				?>
			</tbody>
		</table>
	</div>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#companyTable').DataTable();
		});
	</script>
</body>
</html>
