$("#approve").click(function()
{
	var emailOfApprover = $("#emailInput").val();
	var key = $("meta[name=key]").attr("content");

	if(emailOfApprover == '')
	{
		alert("You must enter the email of the next approver and check the box to approve the form.");
	}
	else if ($('#signature:checkbox:checked').length < 1)
	{
		alert("You must check the checkbox to confirm the form is correct to the best of your knowledge.");
	}
	else
	{
		$.post("approveForm.php",
		{
			key: key,
			emailOfApprover: emailOfApprover
		}, function(data)
		{
			if (emailOfApprover == "rbayer@scu.edu")
			{
				location.reload();
			}
			else
			{
				$('#form')[0].reset();
			}
			alert(data);
		});
	}
});

$("#reject").click(function()
{
	var key = $("meta[name=key]").attr("content");

	$.post("rejectForm.php",
	{
		key: key
	}, function(data)
	{
		alert(data);
		$('#form')[0].reset();
	});
});
