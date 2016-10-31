<?php
	$subject = "Tuition and Fees Authorization Form Rejected";
	$msg = "The form you submitted for approval has been rejected. Please update the form and resubmit.";
	$header = "From: no-reply@SCUTuitionForm.com";
	$key = $_POST['key'];

	$nameOfFile = "data/". $key . ".txt";
  	$userFile = fopen($nameOfFile,"r") or die ("Error, file could not be opened or does not exist");
  	$contents = fread($userFile, filesize($nameOfFile));
  	$varData = explode(",",$contents);
  	$email1 = $varData[33];

	$rejectEmail = mail($email1, $subject, $msg, $header);
	if($rejectEmail)
	{
		echo("E-mail sent successfully");
	}
	else
	{
		echo("E-mail failed to send");
	}

?>
