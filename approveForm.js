$("#approve").click(function()
{
	var emailOfApprover = $("#emailInput").val();

	if(emailOfApprover == ''){
		alert("You must enter the email of the next approver and check the box to approve the form.");
	}else{
		$.post("approveForm.php",
		{
			emailOfApprover: emailOfApprover
		}, function(data)
		{
			alert(data);
			$('#form')[0].reset();
		});
	}
}
