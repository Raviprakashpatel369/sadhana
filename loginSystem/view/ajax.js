	//Add Student
	$(document).on('click','#btn-add',function(e) {
		var data = $("#user_form").serialize();
		$.ajax({
			data: data,
			type: "post",
			url: "view/save.php",
			success: function(dataResult){
				$('#addEmployeeModal').modal('hide');
				alert('Data added successfully !'); 
				location.reload();	
					// var dataResult = JSON.parse(dataResult);
					// alert('You entered the function and parsed');
					// if(dataResult.statusCode==200){
					// 	$('#addEmployeeModal').modal('hide');
					// 	alert('Data added successfully !'); 
                    //     location.reload();						
					// }
					// else if(dataResult.statusCode==201){ 
					// 	alert(dataResult);
					// 	alert('Failed');
					// }
			}
		});
	});
	//Updates the values of slots of Student
	$(document).on('click','.update',function(e) {
		var id=$(this).attr("data-id");
		var bio_id=$(this).attr("data-bio-id");
		var youth_id=$(this).attr("data-youth-id");
		var candidate_name=$(this).attr("data-candidate-name");
		var father_name=$(this).attr("data-father-name");
		var panchayat_name=$(this).attr("data-panchayat-name");
		var mandal=$(this).attr("data-mandal");
		var dob=$(this).attr("data-dob");
		var gender=$(this).attr("data-gender");
		var caste=$(this).attr("data-caste");
		var qualification=$(this).attr("data-qualification");
		var phone=$(this).attr("data-phone");
		var bank_name=$(this).attr("data-bank-name");
		var branch_name=$(this).attr("data-branch-name");
		var account_number=$(this).attr("data-account-number");
		var ifsc_code=$(this).attr("data-ifsc-code");
		var youth_status=$(this).attr("data-youth-status");
		var company_name=$(this).attr("data-company-name");
		var company_location=$(this).attr("data-company-location");
		var pptm_1=$(this).attr("data-pptm-1");
		var pptm_2=$(this).attr("data-pptm-2");
		var pptm_3=$(this).attr("data-pptm-3");
		var pptm_4=$(this).attr("data-pptm-4");
		var pptm_5=$(this).attr("data-pptm-5");
		var pptm_6=$(this).attr("data-pptm-6");
		var pptm_7=$(this).attr("data-pptm-7");
		var pptm_8=$(this).attr("data-pptm-8");
		var pptm_9=$(this).attr("data-pptm-9");
		var pptm_10=$(this).attr("data-pptm-10");
		var pptm_11=$(this).attr("data-pptm-11");
		var pptm_12=$(this).attr("data-pptm-12");
		var remark=$(this).attr("data-remark");
		$('#id_u').val(id);
		$('#bio-id_u').val(bio_id);
		$('#youth-id_u').val(youth_id);
		$('#candidate-name_u').val(candidate_name);
		$('#father-name_u').val(father_name);
		$('#panchayat-name_u').val(panchayat_name);
		$('#mandal_u').val(mandal);
		$('#dob_u').val(dob);
		$('#gender_u').val(gender);
		$('#caste_u').val(caste);
		$('#qualification_u').val(qualification);
		$('#phone_u').val(phone);
		$('#bank-name_u').val(bank_name);
		$('#branch-name_u').val(branch_name);
		$('#account-number_u').val(account_number);
		$('#ifsc-code_u').val(ifsc_code);
		$('#youth-status_u').val(youth_status);
		$('#company-name_u').val(company_name);
		$('#company-location_u').val(company_location);
		$('#pptm-1_u').val(pptm_1);
		$('#pptm-2_u').val(pptm_2);
		$('#pptm-3_u').val(pptm_3);
		$('#pptm-4_u').val(pptm_4);
		$('#pptm-5_u').val(pptm_5);
		$('#pptm-6_u').val(pptm_6);
		$('#pptm-7_u').val(pptm_7);
		$('#pptm-8_u').val(pptm_8);
		$('#pptm-9_u').val(pptm_9);
		$('#pptm-10_u').val(pptm_10);
		$('#pptm-11_u').val(pptm_11);
		$('#pptm-12_u').val(pptm_12);
		$('#remark_u').val(remark);
	});
	//Update button
	$(document).on('click','#update',function(e) {
		var data = $("#update_form").serialize();
		$.ajax({
			data: data,
			type: "post",
			url: "view/save.php",
			success: function(dataResult){
				$('#editEmployeeModal').modal('hide');
				alert('Data updated successfully !'); 
				location.reload();	
					// var dataResult = JSON.parse(dataResult);
					// if(dataResult.statusCode==200){
					// 	$('#editEmployeeModal').modal('hide');
					// 	alert('Data updated successfully !'); 
                    //     location.reload();						
					// }
					// else if(dataResult.statusCode==201){
					//    alert(dataResult);
					// }
			}
		});
	});
	//Delete 
	$(document).on("click",".delete",function() { 
		var id=$(this).attr("data-id");
		$('#id_d').val(id);
		
	});
	$(document).on("click", "#delete",function() { 
		$.ajax({
			url: "view/save.php",
			type: "post",
			cache: false,
			data:{
				type:3,
				id: $("#id_d").val()
			},
			success: function(dataResult){
					$('#deleteEmployeeModal').modal('hide');
			        location.reload();
			}
		});
	});

///////////////////////////////////////////////////////////////////////////////////////////
$(document).on('click','#btn-batch-add',function(e) {
	var data = $("#batch_form").serialize();
	$.ajax({
		data:data,
		type: "post",
		url: "view/save.php",
		success: function(dataResult){
			$('#addBatchModal').modal('hide');
			alert('Data added successfully !'); 
			location.reload();	
		}
	});
});
$(document).on('click','.updateBatch',function(e) {
	var batch_id=$(this).attr("data-batch-id")
	var district=$(this).attr("data-district");
	var batch_code=$(this).attr("data-batch-code");
	var course=$(this).attr("data-course");
	var training_center=$(this).attr("data-training-center");
	var start_date=$(this).attr("data-start-date");
	var end_date=$(this).attr("data-end-date");
	var tst=$(this).attr("data-tst");
	var tet=$(this).attr("data-tet");
	var tot=$(this).attr("data-tot");
	var tob=$(this).attr("data-tob");
	var planned_strength=$(this).attr("data-planned-strength");
	var call_letters=$(this).attr("data-call-letters");
	var reported_youth=$(this).attr("data-reported-youth");
	var status=$(this).attr("data-stauts");
	$('#batch-id_u').val(batch_id);
	$('#district_u').val(district);
	$('#batch-code_u').val(batch_code);
	$('#course_u').val(course);
	$('#training-center_u').val(training_center);
	$('#start-date_u').val(start_date);
	$('#end-date_u').val(end_date);
	$('#tst_u').val(tst);
	$('#tet_u').val(tet);
	$('#tot_u').val(tot);
	$('#tob_u').val(tob);
	$('#planned-strength_u').val(planned_strength);
	$('#call-letters_u').val(call_letters);
	$('#reported-youth_u').val(reported_youth);
	$('#status_u').val(status);
});

$(document).on('click','#updateBatch',function(e) {
	var data = $("#update_batch_form").serialize();
	$.ajax({
		data: data,
		type: "post",
		url: "view/save.php",
		success: function(dataResult){
			$('#editBatchModal').modal('hide');
			alert('Data updated successfully !'); 
			location.reload();	
		}
	});
});



































	
	/*  $(document).on("click", "#delete_multiple", function() {
		var user = [];
		$(".user_checkbox:checked").each(function() {
			user.push($(this).data('user-id'));
		});
		if(user.length <=0) {
			alert("Please select records."); 
		} 
		else { 
			WRN_PROFILE_DELETE = "Are you sure you want to delete "+(user.length>1?"these":"this")+" row?";
			var checked = confirm(WRN_PROFILE_DELETE);
			if(checked == true) {
				var selected_values = user.join(",");
				console.log(selected_values);
				$.ajax({
					type: "POST",
					url: "save.php",
					cache:false,
					data:{
						type: 4,						
						id : selected_values
					},
					success: function(response) {
						var ids = response.split(",");
						for (var i=0; i < ids.length; i++ ) {	
							$("#"+ids[i]).remove(); 
						}	
					} 
				}); 
			}  
		} 
	}); 
	 $(document).ready(function(){
		$('[data-toggle="tooltip"]').tooltip();
		var checkbox = $('table tbody input[type="checkbox"]');
		$("#selectAll").click(function(){
			if(this.checked){
				checkbox.each(function(){
					this.checked = true;                        
				});
			} else{
				checkbox.each(function(){
					this.checked = false;                        
				});
			} 
		});
		checkbox.click(function(){
			if(!this.checked){
				$("#selectAll").prop("checked", false);
			}
		});
	}); 
 */