<?php
include 'connection.php';
function myFunction($x)
{
	global $batchid;
	$batchid = $x;
}
if (isset($_GET['batchid'])) {
	myFunction($_GET['batchid']);
}
?>

<!DOCTYPE html>

<html>

<head>
	<?php include './../phputil/links.php' ?>
	<link rel="stylesheet" href="./../css/styles.css">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sadhana Skills</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="view/css/tablecss.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="view/ajax.js"></script>
	<link rel="stylesheet" href="view/css/new.css">
	<script src="view/ajax.js"></script>
	<!-- Directory Selection-->
	<style>
		* {
			box-sizing: border-box;
		}

		body::-webkit-scrollbar {
			display: none;
		}

		body {
			font-family: Arial, Helvetica, sans-serif;
		}

		/* Style the header */
		header {
			background-color: #666;
			padding: 30px;
			text-align: center;
			font-size: 35px;
			color: white;
		}

		/* Create two columns/boxes that floats next to each other */
		menu {
			float: left;
			width: 12%;
			height: 100vh;
			padding: 2vh;
			padding-left: 0.5vh;
			background-color: #2b426b;
			color: #f1f1f1;
			padding-top: 4vh;
			margin-top: 0vh;
		}

		/* Style the list inside the menu */
		menu ul {
			list-style-type: none;
			padding: 0;
		}

		menu a:hover {
			color: #c07b37;
			text-decoration: none;
		}

		article {
			float: left;
			padding: 20px;
			width: 88%;
			background-color: #f1f1f1;
			height: 100vh;
			/* only for demonstration, should be removed */
		}

		#batchDetails {
			display: block;
		}

		#studentsDetails {
			display: none;
		}

		#placed {
			display: none;
		}

		#enrolled {
			display: none;
		}

		/* Clear floats after the columns */
		section::after {
			content: "";
			display: table;
			clear: both;
		}

		/* Style the footer */
		footer {
			background-color: #777;
			padding: 10px;
			text-align: center;
			color: white;
		}

		menu li a:hover {
			color: #c07b37;
			cursor: pointer;
		}



		/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
		@media (max-width: 600px) {

			menu,
			article {
				width: 100%;
				height: auto;
			}
		}
	</style>
</head>

<body>
	<!-- Nav - Bar -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#">SADHANA SKILLS</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="./../index.php">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#AboutUs">About Us</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="gallery.php">Gallery</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">TOT</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Success Stories</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Gallery</a>
				</li>

			</ul>
			<form class="form-inline navb">
				<a id=hovertext href="./logout.php" style="padding-left: 18px; padding-right: 18px;">Logout</a>
			</form>
		</div>
	</nav>
	<section>

		<menu>
			<div id="hidingMenu">
				<ul>
					<li><b>MENU</b></li>
					<br>
					<li><a href="#addBatchModal" class="btn btn-success" data-toggle="modal"><span>Create Batch</span></a></li>
					<br>
					<li><a href="#" onclick="myFunction(1)">Batch Details</a></li>
					<br>
					<li><a href="#" onclick="myFunction(2)">Enrolled Students</a></li>
					<br>
					<li><a href="# " onclick="myFunction(3)">Placed Students</a></li>
				</ul>
			</div>
		</menu>
		<article id="article">
			<div class="containerTable " id="batchDetails">
				<p id="success"></p>
				<div class="table-wrapper">
					<div style="overflow-x:auto;">
						<table class="table-bordered" style="font-family: Arial; max-height:80vh">
							<thead>
								<tr style="color: white; ">
									<th colspan="18">
										<center>All Batch's Details</center>
									</th>
								</tr>
								<tr style="color: white;">

									<th>SL NO</th>
									<th>District</th>
									<th>Batch Code</th>
									<th>Course</th>
									<th>Training Center</th>
									<th>Start Date</th>
									<th>End Date</th>
									<th>Training Start time</th>
									<th>Training End time</th>
									<th>Type of Training</th>
									<th>Training Owned By</th>
									<th>Planned Strength</th>
									<th>Call Letters Generate</th>
									<th>Reported Youth</th>
									<th>Status</th>
									<th>View</th>
									<th>Edit</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$result = mysqli_query($con, "SELECT * FROM `batches`");
								$i = 1;
								while ($row = mysqli_fetch_array($result)) {
								?>
									<tr id="<?php echo $row["Serial Number"]; ?>">
										<td><?php echo $i; ?></td>
										<td><?php echo $row["District"]; ?></td>
										<td><?php echo $row["Batch Code"]; ?></td>
										<td><?php echo $row["Course"]; ?></td>
										<td><?php echo $row["Training Center"]; ?></td>
										<td><?php echo $row["Start Date"]; ?></td>
										<td><?php echo $row["End Date"]; ?></td>
										<td><?php echo $row["Training Start Time"]; ?></td>
										<td><?php echo $row["Training End Time"]; ?></td>
										<td><?php echo $row["Type of Training"]; ?></td>
										<td><?php echo $row["Training Owned By"]; ?></td>
										<td><?php echo $row["Planned Strength"]; ?></td>
										<td><?php echo $row["Call letters Generate"]; ?></td>
										<td><?php echo $row["Reported Youth"]; ?></td>
										<td><?php echo $row["Status"]; ?></td>
										<td>
											<a onclick="studentsFunction()" href="director601.php?batchid=<?php echo $row["Batch Code"]; ?>" id="viewButton"><i class="material-icons">remove_red_eye</i></a>
											<div id="<?php echo $row["View"]; ?>">
											</div>
										</td>
										<td>
											<a href="#editBatchModal" class="edit" data-toggle="modal">
												<i class="material-icons updateBatch" data-toggle="tooltip" data-batch-id="<?php echo $row["Serial Number"] ?>" ; data-district="<?php echo $row["District"]; ?>" data-batch-code="<?php echo $row["Batch Code"]; ?>" data-course="<?php echo $row["Course"]; ?>" data-training-center="<?php echo $row["Training Center"]; ?>" data-start-date="<?php echo $row["Start Date"]; ?>" data-end-date="<?php echo $row["End Date"]; ?>" data-tst="<?php echo $row["Training Start Time"]; ?>" data-tet="<?php echo $row["Training End Time"]; ?>" data-tot="<?php echo $row["Type of Training"]; ?>" data-tob="<?php echo $row["Training Owned By"]; ?>" data-planned-strength="<?php echo $row["Planned Strength"]; ?>" data-call-letters="<?php echo $row["Call letters Generate"]; ?>" data-reported-youth="<?php echo $row["Reported Youth"]; ?>" data-stauts="<?php echo $row["Status"]; ?>" title="Edit"></i>
											</a>
										</td>
									</tr>
								<?php
									$i++;
								}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="containerTable" id="enrolled">
				<p id="success"></p>
				<div class="table-wrapper">
					<div class="table-title">
						<div class="row">
							<div class="col-sm-6">
								<h2><b>Enrolled</b> Students List</h2>
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
							$result = mysqli_query($conn, "SELECT * FROM students where `Youth Status`='Enrolled'");
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
			<div class="containerTable" id="placed">
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
		</article>

	</section>
	<!-- Experiment From Here t check the fuctionality of a single page  -->


	<!-- Add Batch Modal HTML -->
	<div id="addBatchModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form id="batch_form">
					<div class="modal-header">
						<h4 class="modal-title">Add Student</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					</div>
					<div class="row">
						<div class="modal-body" style="padding-right:0px;">

							<!-- 1 -->
							<div class="form-group">
								<label>District</label>
								<input type="text" id="district" name="district" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Batch Code</label>
								<input type="text" id="batch-code" name="batch-code" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Course</label>
								<input type="text" id="course" name="course" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Training Center</label>
								<input type="text" id="training-center" name="training-center" class="form-control" required>
							</div>
							<!-- 2 -->
							<div class="form-group">
								<label>Start Date</label>
								<input type="text" id="start-date" name="start-date" class="form-control" required>
							</div>
							<div class="form-group">
								<label>End Date</label>
								<input type="text" id="end-date" name="end-date" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Training Start Time</label>
								<input type="text" id="tst" name="tst" class="form-control" required>
							</div>

						</div>

						<div class="modal-body" style="padding-left:0px;">

							<!-- 1 -->
							<div class="form-group">
								<label>Training End Time</label>
								<input type="text" id="tet" name="tet" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Type Of Training</label>
								<input type="text" id="tot" name="tot" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Training Owned by</label>
								<input type="text" id="tob" name="tob" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Planned Strength</label>
								<input type="phone" id="planned-strength" name="planned-strength" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Call Letters generated</label>
								<input type="text" id="call-letters" name="call-letters" class="form-control" required>
							</div>

							<!-- 2 -->
							<div class="form-group">
								<label>Reported Youth</label>
								<input type="text" id="reported-youth" name="reported-youth" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Status</label>
								<input type="text" id="status" name="status" class="form-control" required>
							</div>

						</div>

					</div>
					<div class="modal-footer">
						<input type="hidden" value="4" name="type">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<button type="button" class="btn btn-success" id="btn-batch-add">Add</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<div id="editBatchModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form id="update_batch_form">
					<div class="modal-header">
						<h4 class="modal-title">Edit Student</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					</div>
					<div class="row">
						<div class="modal-body" style="padding-right:0px;">

							<!-- 1 -->
							<input type="hidden" id="batch-id_u" name="batch-id" class="form-control" required>

							<div class="form-group">
								<label>District</label>
								<input type="text" id="district_u" name="district" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Batch Code</label>
								<input type="text" id="batch-code_u" name="batch-code" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Course</label>
								<input type="text" id="course_u" name="course" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Training Center</label>
								<input type="text" id="training-center_u" name="training-center" class="form-control" required>
							</div>
							<!-- 2 -->
							<div class="form-group">
								<label>Start Date</label>
								<input type="text" id="start-date_u" name="start-date" class="form-control" required>
							</div>
							<div class="form-group">
								<label>End Date</label>
								<input type="text" id="end-date_u" name="end-date" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Training Start Time</label>
								<input type="text" id="tst_u" name="tst" class="form-control" required>
							</div>

						</div>

						<div class="modal-body" style="padding-left:0px;">

							<!-- 1 -->
							<div class="form-group">
								<label>Training End Time</label>
								<input type="text" id="tet_u" name="tet" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Type Of Training</label>
								<input type="text" id="tot_u" name="tot" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Training Owned by</label>
								<input type="text" id="tob_u" name="tob" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Planned Strength</label>
								<input type="text" id="planned-strength_u" name="planned-strength" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Call Letters generated</label>
								<input type="text" id="call-letters_u" name="call-letters" class="form-control" required>
							</div>

							<!-- 2 -->
							<div class="form-group">
								<label>Reported Youth</label>
								<input type="text" id="reported-youth_u" name="reported-youth" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Status</label>
								<input type="text" id="status_u" name="status" class="form-control" required>
							</div>

						</div>

					</div>

					<div class="modal-footer">
						<input type="hidden" value="5" name="type">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<button type="button" class="btn btn-info" id="updateBatch">Update</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Delete Modal HTML -->
	<div id="deleteBatchModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>

					<div class="modal-header">
						<h4 class="modal-title">Delete Student</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					</div>
					<div class="modal-body">
						<input type="hidden" id="id_d" name="id" class="form-control">
						<p>Are you sure you want to delete these Records?</p>
						<p class="text-warning"><small>This action cannot be undone.</small></p>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<button type="button" class="btn btn-danger" id="delete">Delete</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	</section>

	<!-- Footer -->

	<!-- End Footer -->




</body>
<script>
	function myFunction(y) {
		var e = document.getElementById("article");
		var a = document.getElementById("batchDetails");
		var b = document.getElementById("enrolled");
		var c = document.getElementById("placed");
		var d = document.getElementById("studentsDetails");
		if (y == 1) {
			a.style.display = "block";
			b.style.display = "none";
			c.style.display = "none";
			d.style.display = "none";
		} else if (y == 2) {
			a.style.display = "none";
			b.style.display = "block";
			c.style.display = "none";
			d.style.display = "none";
		} else if (y == 3) {
			a.style.display = "none";
			b.style.display = "none";
			c.style.display = "block";
			d.style.display = "none";
		}
	}

	function studentsFunction() {
		var x = document.getElementById("studentsDetails");
		var z = document.getElementById("batchDetails");
		var q = document.getElementsById("hidingMenu");
		x.style.display = "block";
		z.style.display = "none";
		x.style.display = "block";
	}
</script>

</html>