$(document).ready(function(){
	$("#submit").click(function(){
		var nameInput = $("#nameInput").val();
		var id = $("#idInput").val();
		var advisor = $("#advisorInput").val();
		var year = $("#yearInput").val();
		var quarter = $("#quarterInput").val();
		var dept = $("#deptProgInput").val();
		var userType = $("input[type=radio][name=roleRadio]:checked").val();
		var major = $("#majorSelect").val();
		var percentFTE = $("input[type=radio][name=taFTERadio]:checked").val();
		var fundSrc = $("#fundInput").val();
		var fundDept = $("#deptInput").val();
		var pgmCode = $("#pgmCodeInput").val();
		var activity = $("#activityInput").val();
		var curClass = $("#classInput").val();
		var projId = $("#pIdInput").val();
		var courseId1 = $("#cId0").val();
		var courseTitle1 = $("#cTitle0").val();
		var numCredits1 = $("#cCredit0").val();
		var courseId2 = $("#cId1").val();
		var courseTitle2 = $("#cTitle1").val();
		var numCredits2 = $("#cCredit1").val();
		var courseId3 = $("#cId2").val();
		var courseTitle3 = $("#cTitle2").val();
		var numCredits3 = $("#cCredit2").val();
		var courseId4 = $("#cId3").val();
		var courseTitle4 = $("#cTitle3").val();
		var numCredits4 = $("#cCredit3").val();
		var courseId5 = $("#cId4").val();
		var courseTitle5 = $("#cTitle4").val();
		var numCredits5 = $("#cCredit4").val();
		var courseId6 = $("#cId5").val();
		var courseTitle6 = $("#cTitle5").val();
		var numCredits6 = $("#cCredit5").val();
		var feeCheck = 'off'
		if($("#associationFeeCheck:checked").val() == 'on'){
			feeCheck = 'on';
		}

		var email = $("#emailInput").val();
		var semail = $("#sEmailInput").val();
		if(courseId1 == null){
			courseId1 = '';
			courseTitle1 = '';
			numCredits1 = '';
		}
		if(courseId2 == null){
			courseId2 = '';
			courseTitle2 = '';
			numCredits2 = '';
		}
		if(courseId3 == null){
			courseId3 = '';
			courseTitle3 = '';
			numCredits3 = '';
		}
		if(courseId4 == null){
			courseId4 = '';
			courseTitle4 = '';
			numCredits4 = '';
		}
		if(courseId5 == null){
			courseId5 = '';
			courseTitle5 = '';
			numCredits5 = '';
		}
		if(courseId6 == null){
			courseId6 = '';
			courseTitle6 = '';
			numCredits6 = '';
		}
		


		if(userType == null || nameInput == '' || id == '' || advisor == '' || year == '' || quarter == '' || dept == '' || major == '' || userType == '' || email == '')
		{
			alert("Insertion Failed, Some Fields are Blank");
		}
		else if ($('#signature:checkbox:checked').length < 1)
		{
			alert("You must check the checkbox to confirm the form is correct to the best of your knowledge.");
		}
		else
		{
			$.post("php-cgi/refreshform.php", {
			name1: nameInput,
			id1: id,
			advisor1: advisor,
			year1: year,
			quarter1: quarter,
			dept1: dept,
			userType1: userType,
			major1: major,
			percentFTE1: percentFTE,
			fundSrc1: fundSrc,
			fundDept1: fundDept,
			pgmCode1: pgmCode,
			activity1: activity,
			curClass1: curClass,
			projId1: projId,
			courseId11: courseId1,
			courseTitle11: courseTitle1,
			numCredits11: numCredits1,
			courseId21: courseId2,
			courseTitle21: courseTitle2,
			numCredits21: numCredits2,
			courseId31: courseId3,
			courseTitle31: courseTitle3,
			numCredits31: numCredits3,
			courseId41: courseId4,
			courseTitle41: courseTitle4,
			numCredits41: numCredits4,
			courseId51: courseId5,
			courseTitle51: courseTitle5,
			numCredits51: numCredits5,
			courseId61: courseId6,
			courseTitle61: courseTitle6,
			numCredits61: numCredits6,
			studentFeeCheck1: feeCheck,
			
			email1: email,
			semail1: semail
			
			}, function(data){
				alert(data);
				$('#form')[0].reset();
			});
		}
	});
});

