<?php
include 'connection.php';
$vari = mysqli_query($conn, "ALTER TABLE students ALTER batch SET DEFAULT $batchid");
if ($vari) {
}
?>
<!DOCTYPE html>
<html lang="en">

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
	<style>
		body::-webkit-scrollbar {
			display: none;
		}
		table {
			display: block;
			overflow-x: scroll;
			overflow-y: hidden;
			margin-bottom: 4%;
		}

		.containerTable {
			max-width: 96%;
			margin-left: 2%;
			margin-right: 2%;
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

		menu {
			float: left;
			width: 12%;
			height: 93vh;
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
			height: 93vh;
			/* only for demonstration, should be removed */
		}

		/* Clear floats after the columns */
		section::after {
			content: "";
			display: table;
			clear: both;
		}
	</style>

</head>


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

<body>
	<menu>
		<div id="hidingMenu">
			<ul>

				<li><b>MENU</b></li>
				<br>
				<li><a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><span>Add Student</span></a></li>
				<br>
				<li><a onclick="history.back()" href="#"> <span> Back</span></a></li>
			</ul>
		</div>
	</menu>
	<article>
		<div class="containerTable">
			<p id="success"></p>
			<div class="table-wrapper">
				<table class="table-bordered" style="font-family: Arial; overflow-y: scroll; max-height: 80vh;">
					<thead style="color: white;">
						<tr style="color: white; ">
							<th colspan="33">
								<center>Batch <?php echo "$batchid" ?> Details</center>
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
							<th>Bank Name</th>
							<th>Branch Name</th>
							<th>Account Number</th>
							<th>IFSC code</th>
							<th>Youth Status</th>
							<th>Placed Company</th>
							<th>Company Location</th>
							<th>PPTM - 1</th>
							<th>PPTM - 2</th>
							<th>PPTM - 3</th>
							<th>PPTM - 4</th>
							<th>PPTM - 5</th>
							<th>PPTM - 6</th>
							<th>PPTM - 7</th>
							<th>PPTM - 8</th>
							<th>PPTM - 9</th>
							<th>PPTM - 10</th>
							<th>PPTM - 11</th>
							<th>PPTM - 12</th>
							<th>Remark</th>
							<th>Edit/Delete</th>
						</tr>
					</thead>
					<tbody>

						<?php
						$result = mysqli_query($conn, "SELECT * FROM students where batch=$batchid");
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
								<td><?php echo $row["Bank Name"]; ?></td>
								<td><?php echo $row["Branch Name"]; ?></td>
								<td><?php echo $row["Account Number"]; ?></td>
								<td><?php echo $row["IFSC code"]; ?></td>
								<td><?php echo $row["Youth Status"]; ?></td>
								<td><?php echo $row["Company Name"]; ?></td>
								<td><?php echo $row["Company Location"]; ?></td>
								<td><?php echo $row["Month 1"]; ?></td>
								<td><?php echo $row["Month 2"]; ?></td>
								<td><?php echo $row["Month 3"]; ?></td>
								<td><?php echo $row["Month 4"]; ?></td>
								<td><?php echo $row["Month 5"]; ?></td>
								<td><?php echo $row["Month 6"]; ?></td>
								<td><?php echo $row["Month 7"]; ?></td>
								<td><?php echo $row["Month 8"]; ?></td>
								<td><?php echo $row["Month 9"]; ?></td>
								<td><?php echo $row["Month 10"]; ?></td>
								<td><?php echo $row["Month 11"]; ?></td>
								<td><?php echo $row["Month 12"]; ?></td>
								<td><?php echo $row["Remark"]; ?></td>

								<td>
									<a href="#editEmployeeModal" class="edit" data-toggle="modal">
										<i class="material-icons update" data-toggle="tooltip" data-id="<?php echo $row["id"]; ?>" data-bio-id="<?php echo $row["Biometric ID"]; ?>" data-youth-id="<?php echo $row["Youth ID"]; ?>" data-candidate-name="<?php echo $row["Candidate Name"]; ?>" data-father-name="<?php echo $row["Father Name"]; ?>" data-panchayat-name="<?php echo $row["Panchayat Name/Word No."]; ?>" data-mandal="<?php echo $row["Mandal/ULB"]; ?>" data-dob="<?php echo $row["Date of Birth"]; ?>" data-gender="<?php echo $row["Gender"]; ?>" data-caste="<?php echo $row["Caste"]; ?>" data-qualification="<?php echo $row["Qualification"]; ?>" data-phone="<?php echo $row["Youth phone No"]; ?>" data-bank-name="<?php echo $row["Bank Name"]; ?>" data-branch-name="<?php echo $row["Branch Name"]; ?>" data-account-number="<?php echo $row["Account Number"]; ?>" data-ifsc-code="<?php echo $row["IFSC code"]; ?>" data-youth-status="<?php echo $row["Youth Status"]; ?>" data-company-name="<?php echo $row["Company Name"]; ?>" data-company-location="<?php echo $row["Company Location"]; ?>" data-pptm-1="<?php echo $row["Month 1"]; ?>" data-pptm-2="<?php echo $row["Month 2"]; ?>" data-pptm-3="<?php echo $row["Month 3"]; ?>" data-pptm-4="<?php echo $row["Month 4"]; ?>" data-pptm-5="<?php echo $row["Month 5"]; ?>" data-pptm-6="<?php echo $row["Month 6"]; ?>" data-pptm-7="<?php echo $row["Month 7"]; ?>" data-pptm-8="<?php echo $row["Month 8"]; ?>" data-pptm-9="<?php echo $row["Month 9"]; ?>" data-pptm-10="<?php echo $row["Month 10"]; ?>" data-pptm-11="<?php echo $row["Month 11"]; ?>" data-pptm-12="<?php echo $row["Month 12"]; ?>" data-remark="<?php echo $row["Remark"]; ?>" title="Edit"></i>
									</a>
									<a href="#deleteEmployeeModal" class="delete" data-id="<?php echo $row["id"]; ?>" data-toggle="modal">
										<i class="material-icons" data-toggle="tooltip" title="Delete"></i></a>
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
	</article>

	<!-- Add Modal HTML -->
	<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form id="user_form">
					<div class="modal-header">
						<h4 class="modal-title">Add Student</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					</div>
					<div class="row">
						<div class="modal-body" style="padding-right:0px;">

							<!-- 1 -->
							<div class="form-group">
								<label>Biometric ID</label>
								<input type="text" id="bio-id" name="bio-id" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Youth ID</label>
								<input type="text" id="youth-id" name="youth-id" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Candidate Name</label>
								<input type="text" id="candidate-name" name="candidate-name" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Father Name</label>
								<input type="text" id="father-name" name="father-name" class="form-control" required>
							</div>
							<!-- 2 -->
							<div class="form-group">
								<label>Panchayat Name/Word No.</label>
								<input type="text" id="panchayat-name" name="panchayat-name" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Mandal/ULB</label>
								<input type="text" id="mandal" name="mandal" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Date of Birth</label>
								<input type="text" id="dob" name="dob" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Gender</label>
								<input type="text" id="gender" name="gender" class="form-control" required>
							</div>
						</div>

						<div class="modal-body" style="padding-left:0px;">

							<!-- 1 -->
							<div class="form-group">
								<label>Caste</label>
								<input type="text" id="caste" name="caste" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Qualification</label>
								<input type="text" id="qualification" name="qualification" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Youth phone No</label>
								<input type="phone" id="phone" name="phone" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Bank Name</label>
								<input type="text" id="bank-name" name="bank-name" class="form-control" required>
							</div>

							<!-- 2 -->
							<div class="form-group">
								<label>Branch Name</label>
								<input type="text" id="branch-name" name="branch-name" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Account Number</label>
								<input type="text" id="account-number" name="account-number" class="form-control" required>
							</div>
							<div class="form-group">
								<label>IFSC code</label>
								<input type="text" id="ifsc-code" name="ifsc-code" class="form-control" required>
							</div>
							<!-- <div class="form-group">
								<label>Youth Status</label>
								<input type="text" id="youth-status" name="youth-status" class="form-control" required>
							</div> -->
						</div>

						<div class="modal-body" style="padding-left:0px;">

							<!-- 1 -->
							<div class="form-group">
								<label>PPTM - 1</label>
								<input type="text" id="pptm-1" name="pptm-1" class="form-control" required>
							</div>
							<div class="form-group">
								<label>PPTM - 2</label>
								<input type="text" id="pptm-2" name="pptm-2" class="form-control" required>
							</div>
							<div class="form-group">
								<label>PPTM - 3</label>
								<input type="text" id="pptm-3" name="pptm-3" class="form-control" required>
							</div>
							<div class="form-group">
								<label>PPTM - 4</label>
								<input type="text" id="pptm-4" name="pptm-4" class="form-control" required>
							</div>
							<!-- 2 -->
							<div class="form-group">
								<label>PPTM - 5</label>
								<input type="text" id="pptm-5" name="pptm-5" class="form-control" required>
							</div>
							<div class="form-group">
								<label>PPTM - 6</label>
								<input type="text" id="pptm-6" name="pptm-6" class="form-control" required>
							</div>
							<div class="form-group">
								<label>PPTM - 7</label>
								<input type="text" id="pptm-7" name="pptm-7" class="form-control" required>
							</div>
							<div class="form-group">
								<label>PPTM - 8</label>
								<input type="text" id="pptm-8" name="pptm-8" class="form-control" required>
							</div>
						</div>

						<div class="modal-body" style="padding-left:0px;">

							<!-- 1 -->
							<div class="form-group">
								<label>PPTM - 9</label>
								<input type="text" id="pptm-9" name="pptm-9" class="form-control" required>
							</div>
							<div class="form-group">
								<label>PPTM - 10</label>
								<input type="text" id="pptm-10" name="pptm-10" class="form-control" required>
							</div>
							<div class="form-group">
								<label>PPTM - 11</label>
								<input type="text" id="pptm-11" name="pptm-11" class="form-control" required>
							</div>
							<div class="form-group">
								<label>PPTM - 12</label>
								<input type="text" id="pptm-12" name="pptm-12" class="form-control" required>
							</div>

							<!-- 2 -->
							<div class="form-group">
								<label>Company Name</label>
								<input type="text" id="company-name" name="company-name" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Company Location</label>
								<input type="text" id="company-location" name="company-location" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Remark</label>
								<input type="text" id="remark" name="remark" class="form-control" required>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<input type="hidden" value="1" name="type">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<button type="button" class="btn btn-success" id="btn-add">Add</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Edit Modal HTML -->
	<div id="editEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form id="update_form">
					<div class="modal-header">
						<h4 class="modal-title">Edit Student</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					</div>
					<div class="row">
						<div class="modal-body">
							<!-- 1 -->
							<input type="hidden" id="id_u" name="id" class="form-control" required>
							<div class="form-group">
								<label>Biometric ID</label>
								<input type="text" id="bio-id_u" name="bio-id" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Youth ID</label>
								<input type="text" id="youth-id_u" name="youth-id" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Candidate Name</label>
								<input type="text" id="candidate-name_u" name="candidate-name" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Father Name</label>
								<input type="text" id="father-name_u" name="father-name" class="form-control" required>
							</div>
							<!-- 2 -->
							<div class="form-group">
								<label>Panchayat Name/Word No.</label>
								<input type="text" id="panchayat-name_u" name="panchayat-name" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Mandal/ULB</label>
								<input type="text" id="mandal_u" name="mandal" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Date of Birth</label>
								<input type="text" id="dob_u" name="dob" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Gender</label>
								<input type="text" id="gender_u" name="gender" class="form-control" required>
							</div>
						</div>
						<div class="modal-body">
							<!-- 1 -->
							<div class="form-group">
								<label>Caste</label>
								<input type="text" id="caste_u" name="caste" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Qualification</label>
								<input type="text" id="qualification_u" name="qualification" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Youth phone No</label>
								<input type="phone" id="phone_u" name="phone" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Bank Name</label>
								<input type="text" id="bank-name_u" name="bank-name" class="form-control" required>
							</div>

							<!-- 2 -->
							<div class="form-group">
								<label>Branch Name</label>
								<input type="text" id="branch-name_u" name="branch-name" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Account Number</label>
								<input type="text" id="account-number_u" name="account-number" class="form-control" required>
							</div>
							<div class="form-group">
								<label>IFSC code</label>
								<input type="text" id="ifsc-code_u" name="ifsc-code" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Youth Status</label>
								<input type="text" id="youth-status_u" name="youth-status" class="form-control" required>
							</div>
						</div>
						<div class="modal-body" style="padding-left:0px;">

							<!-- 1 -->
							<div class="form-group">
								<label>PPTM - 1</label>
								<input type="text" id="pptm-1_u" name="pptm-1" class="form-control" required>
							</div>
							<div class="form-group">
								<label>PPTM - 2</label>
								<input type="text" id="pptm-2_u" name="pptm-2" class="form-control" required>
							</div>
							<div class="form-group">
								<label>PPTM - 3</label>
								<input type="text" id="pptm-3_u" name="pptm-3" class="form-control" required>
							</div>
							<div class="form-group">
								<label>PPTM - 4</label>
								<input type="text" id="pptm-4_u" name="pptm-4" class="form-control" required>
							</div>
							<!-- 2 -->
							<div class="form-group">
								<label>PPTM - 5</label>
								<input type="text" id="pptm-5_u" name="pptm-5" class="form-control" required>
							</div>
							<div class="form-group">
								<label>PPTM - 6</label>
								<input type="text" id="pptm-6_u" name="pptm-6" class="form-control" required>
							</div>
							<div class="form-group">
								<label>PPTM - 7</label>
								<input type="text" id="pptm-7_u" name="pptm-7" class="form-control" required>
							</div>
							<div class="form-group">
								<label>PPTM - 8</label>
								<input type="text" id="pptm-8_u" name="pptm-8" class="form-control" required>
							</div>
						</div>
						<div class="modal-body" style="padding-left:0px;">

							<!-- 1 -->
							<div class="form-group">
								<label>PPTM - 9</label>
								<input type="text" id="pptm-9_u" name="pptm-9" class="form-control" required>
							</div>
							<div class="form-group">
								<label>PPTM - 10</label>
								<input type="text" id="pptm-10_u" name="pptm-10" class="form-control" required>
							</div>
							<div class="form-group">
								<label>PPTM - 11</label>
								<input type="text" id="pptm-11_u" name="pptm-11" class="form-control" required>
							</div>
							<div class="form-group">
								<label>PPTM - 12</label>
								<input type="text" id="pptm-12_u" name="pptm-12" class="form-control" required>
							</div>

							<!-- 2 -->
							<div class="form-group">
								<label>Company Name</label>
								<input type="text" id="company-name_u" name="company-name" class="form-control" required>
							</div>
							<div class="form-group">
								<label>Company Location</label>
								<input type="text" id="company-location_u" name="company-location" class="form-control" required>
							</div>
							<!-- <div class="form-group">
									<label>Photo</label>
									<input type="file" id="" name="image" class="form-control" style="width: 285px;" required>
								</div> -->
							<div class="form-group">
								<label>Remark</label>
								<input type="text" id="remark_u" name="remark" class="form-control" required>
							</div>
						</div>
					</div>

					<div class="modal-footer">
						<input type="hidden" value="2" name="type">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<button type="button" class="btn btn-info" id="update">Update</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Delete Modal HTML -->
	<div id="deleteEmployeeModal" class="modal fade">
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

</body>

</html>