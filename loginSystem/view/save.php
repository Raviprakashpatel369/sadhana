<?php
include 'connection.php';
if (count($_POST) > 0) {
	if ($_POST['type'] == 1) {
		$bio_id = $_POST['bio-id'];
		$youth_id = $_POST['youth-id'];
		$candidate_name = $_POST['candidate-name'];
		$father_name = $_POST['father-name'];
		$panchayat_name = $_POST['panchayat-name'];
		$mandal = $_POST['mandal'];
		$dob = $_POST['dob'];
		$gender = $_POST['gender'];
		$caste = $_POST['caste'];
		$qualification = $_POST['qualification'];
		$phone = $_POST['phone'];
		$bank_name = $_POST['bank-name'];
		$branch_name = $_POST['branch-name'];
		$account_number = $_POST['account-number'];
		$ifsc_code = $_POST['ifsc-code'];
		$company_name = $_POST['company-name'];
		$company_location = $_POST['company-location'];
		$pptm_1 = $_POST['pptm-1'];
		$pptm_2 = $_POST['pptm-2'];
		$pptm_3 = $_POST['pptm-3'];
		$pptm_4 = $_POST['pptm-4'];
		$pptm_5 = $_POST['pptm-5'];
		$pptm_6 = $_POST['pptm-6'];
		$pptm_7 = $_POST['pptm-7'];
		$pptm_8 = $_POST['pptm-8'];
		$pptm_9 = $_POST['pptm-9'];
		$pptm_10 = $_POST['pptm-10'];
		$pptm_11 = $_POST['pptm-11'];
		$pptm_12 = $_POST['pptm-12'];
		$remark = $_POST['remark'];

		$sql = "INSERT INTO `students` (`Biometric ID`, `Youth ID`, `Candidate Name`, `Father Name`, `Panchayat Name/Word No.`, `Mandal/ULB`, `Date of Birth`, `Gender`, `Caste`, `Qualification`, `Youth phone No`, `Bank Name`, `Branch Name`, `Account Number`, `IFSC code`, `Company Name`, `Company Location`, `Month 1`, `Month 2`, `Month 3`, `Month 4`, `Month 5`, `Month 6`, `Month 7`, `Month 8`, `Month 9`, `Month 10`, `Month 11`, `Month 12`, `Remark`) 
		VALUES ('$bio_id','$youth_id','$candidate_name','$father_name','$panchayat_name','$mandal','$dob','$gender','$caste','$qualification','$phone','$bank_name','$branch_name','$account_number','$ifsc_code','$company_name','$company_location','$pptm_1','$pptm_2','$pptm_3','$pptm_4','$pptm_5','$pptm_6','$pptm_7','$pptm_8','$pptm_9','$pptm_10','$pptm_11','$pptm_12','$remark')";

		if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode" => 200));
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}

	if ($_POST['type'] == 2) {
		$id = $_POST['id'];
		$bio_id = $_POST['bio-id'];
		$youth_id = $_POST['youth-id'];
		$candidate_name = $_POST['candidate-name'];
		$father_name = $_POST['father-name'];
		$panchayat_name = $_POST['panchayat-name'];
		$mandal = $_POST['mandal'];
		$dob = $_POST['dob'];
		$gender = $_POST['gender'];
		$caste = $_POST['caste'];
		$qualification = $_POST['qualification'];
		$phone = $_POST['phone'];
		$bank_name = $_POST['bank-name'];
		$branch_name = $_POST['branch-name'];
		$account_number = $_POST['account-number'];
		$ifsc_code = $_POST['ifsc-code'];
		$youth_status = $_POST['youth-status'];
		$company_name = $_POST['company-name'];
		$company_location = $_POST['company-location'];
		$pptm_1 = $_POST['pptm-1'];
		$pptm_2 = $_POST['pptm-2'];
		$pptm_3 = $_POST['pptm-3'];
		$pptm_4 = $_POST['pptm-4'];
		$pptm_5 = $_POST['pptm-5'];
		$pptm_6 = $_POST['pptm-6'];
		$pptm_7 = $_POST['pptm-7'];
		$pptm_8 = $_POST['pptm-8'];
		$pptm_9 = $_POST['pptm-9'];
		$pptm_10 = $_POST['pptm-10'];
		$pptm_11 = $_POST['pptm-11'];
		$pptm_12 = $_POST['pptm-12'];
		$remark = $_POST['remark'];
		$sql = "UPDATE `students` 
		SET `Biometric ID`='$bio_id',
		`Youth ID`='$youth_id',
		`Candidate Name`='$candidate_name',
		`Father Name`='$father_name',
		`Panchayat Name/Word No.`='$panchayat_name',
		`Mandal/ULB`='$mandal',
		`Date of Birth`='$dob',
		`Gender`='$gender',
		`Caste`='$caste',
		`Qualification`='$qualification',
		`Youth phone No`='$phone',
		`Bank Name`='$bank_name',
		`Branch Name`='$branch_name',
		`Account Number`='$account_number',
		`IFSC code`='$ifsc_code',
		`Company Name`='$company_name', 
		`Company Location`='$company_location', 
		`Month 1`='$pptm_1', 
		`Month 2`='$pptm_2', 
		`Month 3`='$pptm_3', 
		`Month 4`='$pptm_4', 
		`Month 5`='$pptm_5',
		`Month 6`='$pptm_6', 
		`Month 7`='$pptm_7', 
		`Month 8`='$pptm_8', 
		`Month 9`='$pptm_9', 
		`Month 10`='$pptm_10', 
		`Month 11`='$pptm_11', 
		`Month 12`='$pptm_12', 
		`Remark`='$remark', 
		`Youth Status`='$youth_status' WHERE id=$id";
		if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode" => 200));
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}

	if ($_POST['type'] == 3) {
		$id = $_POST['id'];
		$sql = "DELETE FROM `students` WHERE id=$id";
		if (mysqli_query($conn, $sql)) {
			echo $id;
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}

	if ($_POST['type'] == 4) {
		$district = $_POST['district'];
		$batch_code = $_POST['batch-code'];
		$course = $_POST['course'];
		$training_center = $_POST['training-center'];
		$start_date = $_POST['start-date'];
		$end_date = $_POST['end-date'];
		$tst = $_POST['tst'];
		$tet = $_POST['tet'];
		$tot = $_POST['tot'];
		$tob = $_POST['tob'];
		$planned_strength = $_POST['planned-strength'];
		$call_letters = $_POST['call-letters'];
		$reported_youth = $_POST['reported-youth'];
		$status = $_POST['status'];


		$sql = "INSERT INTO `batches` (`District`, `Batch Code`, `Course`, `Training Center`, `Start Date`, `End Date`, `Training Start Time`, `Training End Time`, `Type of Training`, `Training Owned By`, `Planned Strength`, `Call letters Generate`, `Reported Youth`, `Status`) 
		VALUES ('$district','$batch_code','$course','$training_center','$start_date','$end_date','$tst','$tet','$tot','$tob','$planned_strength','$call_letters','$reported_youth','$status')";

		if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode" => 200));
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}

	if ($_POST['type'] == 5) {
		$batch_id = $_POST['batch-id'];
		$district = $_POST['district'];
		$batch_code = $_POST['batch-code'];
		$course = $_POST['course'];
		$training_center = $_POST['training-center'];
		$start_date = $_POST['start-date'];
		$end_date = $_POST['end-date'];
		$tst = $_POST['tst'];
		$tet = $_POST['tet'];
		$tot = $_POST['tot'];
		$tob = $_POST['tob'];
		$planned_strength = $_POST['planned-strength'];
		$call_letters = $_POST['call-letters'];
		$reported_youth = $_POST['reported-youth'];
		$status = $_POST['status'];


		$sql = "UPDATE `batches` SET `District`='$district', 
		`Batch Code`='$batch_code', 
		`Course`='$course', 
		`Training Center`='$training_center', 
		`Start Date`='$start_date', 
		`End Date`='$end_date', 
		`Training Start Time`='$tst', 
		`Training End Time`='$tet', 
		`Type of Training`='$tot', 
		`Training Owned By`='$tob', 
		`Planned Strength`='$planned_strength', 
		`Call letters Generate`='$call_letters', 
		`Reported Youth`='$reported_youth', 
		`Status`='$status' WHERE `Serial Number`='$batch_id'";

		if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode" => 200));
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}

?>


<!-- INSERT INTO `students` (`id`, `Biometric ID`, `Youth ID`, `Candidate Name`, `Father Name`, `Panchayat Name/Word No.`, `Mandal/ULB`, `Date of Birth`, `Gender`, `Caste`, `Qualification`, `Youth phone No`, `Bank Name`, `Branch Name`, `Account Number`, `IFSC code`, `image`, `Company Name`, `Company Location`, `Month 1`, `Month 2`, `Month 3`, `Month 4`, `Month 5`, `Month 6`, `Month 7`, `Month 8`, `Month 9`, `Month 10`, `Month 11`, `Month 12`, `Youth Status`, `Remark`, `batch`, `State`) VALUES (NULL, '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, '601', ''); -->