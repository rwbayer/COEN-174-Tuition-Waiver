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
		var courseId1 = $("#cIdInput").val();
		var courseTitle1 = $("#courseInput").val();
		var numCredits1 = $("#creditInput").val();
		/*var courseId2 = $("#cIdInput1").val();
		var courseTitle2 = $("#courseInput1").val();
		var numCredits2 = $("#creditInput1").val();
		var courseId3 = $("#cIdInput2").val();
		var courseTitle3 = $("#courseInput2").val();
		var numCredits3 = $("#creditInput2").val();
		var courseId4 = $("#cIdInput3").val();
		var courseTitle4 = $("#courseInput3").val();
		var numCredits4 = $("#creditInput3").val();
		var courseId5 = $("#cIdInput4").val();
		var courseTitle5 = $("#courseInput4").val();
		var numCredits5 = $("#creditInput4").val();
		var courseId6 = $("#cIdInput5").val();
		var courseTitle6 = $("#courseInput5").val();
		var numCredits6 = $("#creditInput5").val();
		*/
		var email = $("#emailInput").val();
		

		if(nameInput == '' || id == '' || advisor == '' || year == '' || quarter == '' || dept == '' || major == '' || userType == '' || email == ''){
			alert("Insertion Failed, Some Fields are Blank");
		}else{
			$.post("refreshform.php", {
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
			/*courseId21: courseId2,
			courseTitle21: courseTitle2,
			numCredits21: numCredits2,
			courseId31: courseId3,
			courseTitle31: courseTitle3,
			numCredits31: numCredits3,
			courseId41: courseId4,
			courseTitle41: courseTitle4,
			numCredits41: numCredits4,
			courseId51: courseId5,
			courseTitle51: courseTitle5
			numCredits51: numCredits5
			courseId61: courseId6
			courseTitle61: courseTitle6,
			numCredits61: numCredits6,
			*/
			email1: email
			}, function(data){
				alert(data);
				$('#form')[0].reset();
			});
		}
	});
});

