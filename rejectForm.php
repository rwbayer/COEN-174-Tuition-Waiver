<?php
	$subject = "Tuition and Fees Authorization Form Rejected";
	$header = "From: no-reply@SCUTuitionForm.com";
	$key = $_POST['key'];
	$message = $_POST['message'];

	if ($message == "")
	{
		$msg = "The form you submitted for approval has been rejected. Please update the form and resubmit.";
	}
	else
	{
		$msg = "The form you submitted for approval has been rejected. Please update the form and resubmit. Your form was rejected because: ";
	}
	$msg .= $message;

	$nameOfFile = "data/". $key . ".txt";
  	$userFile = fopen($nameOfFile,"r") or die ("Error, file could not be opened or does not exist");
  	$contents = fread($userFile, filesize($nameOfFile));
  	$varData = explode(",",$contents);
  	$email1 = $varData[34];

	$rejectEmail = mail($email1, $subject, $msg, $header);
	if($rejectEmail)
	{
		echo("E-mail sent successfully.");
	}
	else
	{
		echo("E-mail failed to send.");
	}

?>
