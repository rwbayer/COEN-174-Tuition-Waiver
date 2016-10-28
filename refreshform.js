$(document).ready(function(){
$("#submit").click(function(){
var nameInput = $("#nameInput").val();
var id = $("#idInput").val();
var advisor = $("#advisorInput").val();
var year = $("#yearInput").val();
var quarter = $("#quarterInput").val();
var dept = $("#deptProgInput").val();
var major = $("#majorSelect").val();
var userType = $("#roleRadio").val();
var email = $("emailInput").val();

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
	major1: major,
	userType1: userType,
	email1: email
	}, function(data){
		alert(data);
		$('#form')[0].reset();
	});
});
});

