<?php
include 'loginSystem/view/connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<?php include 'phputil/links.php' ?>
	<link rel="stylesheet" href="loginSystem/view/css/tablecss.css">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Sadhana Skills</title>
	<style>
		table {
			display: block;
			overflow-x: scroll;
			overflow-y: hidden;
			margin-bottom: 4%;
		}

		.containerTable {
			max-width: 88%;
			margin-left: 6%;
			margin-right: 6%;
		}

		th {
			padding: 10px;
			min-width: fit-content;

		}

		td {
			padding: 10px;
			width: fit-content;
		}

		.modal-dialog {
			margin-top: 10px;
			max-width: 1200px;
		}

		.form-group {
			margin: 10px 20px;
		}
	</style>
</head>
<br>
<br>
<br>
<div class="containerTable">
	<p id="success"></p>
	<div class="table-wrapper">
		<div class="table-title">
			<div class="row">
				<div class="col-sm-6">
					<h2><b>Placed</b> Students List</h2>
				</div>

			</div>
		</div>
		<table class="table-bordered" style="font-family: Arial">
			<thead style="color: white;">
				<tr style="color: white; ">
					<th colspan="18">
						<center>All batches</center>
					</th>
				</tr>
				<tr>
					<th>SL NO</th>
					<th>Biometric ID</th>
					<th>Youth ID</th>
					<th>Candidate Name</th>
					<th>Father Name</th>
					<th>Panchayat Name/Word No.</th>
					<th>Mandal/ULB</th>
					<th>Date of Birth</th>
					<th>Gender</th>
					<th>Caste</th>
					<th>Qualification</th>
					<th>Youth phone No</th>
				</tr>
			</thead>
			<tbody>

				<?php
				$result = mysqli_query($conn, "SELECT * FROM students where `Youth Status`='Placed'");
				$i = 1;
				while ($row = mysqli_fetch_array($result)) {
				?>
					<tr id="<?php echo $row["id"]; ?>">
						<td><?php echo $i; ?></td>
						<td><?php echo $row["Biometric ID"]; ?></td>
						<td><?php echo $row["Youth ID"]; ?></td>
						<td><?php echo $row["Candidate Name"]; ?></td>
						<td><?php echo $row["Father Name"]; ?></td>
						<td><?php echo $row["Panchayat Name/Word No."]; ?></td>
						<td><?php echo $row["Mandal/ULB"]; ?></td>
						<td><?php echo $row["Date of Birth"]; ?></td>
						<td><?php echo $row["Gender"]; ?></td>
						<td><?php echo $row["Caste"]; ?></td>
						<td><?php echo $row["Qualification"]; ?></td>
						<td><?php echo $row["Youth phone No"]; ?></td>
					</tr>
				<?php
					$i++;
				}
				?>
			</tbody>
		</table>
	</div>
</div>

<body>
	<!--Start Of Navbar-->
	<?php include 'phputil/navbar.php' ?>
	<br><br>
	<!--End Of Navbar-->
	<!-- Footer -->
	<br><br>
	<?php include 'phputil/footer.php' ?>
	<!-- End Footer -->

</body>

</html>