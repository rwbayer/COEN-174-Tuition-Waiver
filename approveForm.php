<?php	
	$key = $_POST['key'];
	$emailOfApprover = $_POST['emailOfApprover'];

	$nameOfFile = "data/". $key . ".txt";
	$userFile = fopen($nameOfFile,"r") or die ("Error, file could not be opened or does not exist");
	$contents = fread($userFile, filesize($nameOfFile));
	$varData = explode(",",$contents);

	$name = $varData[0];
	$id = $varData[1];
	$advisor = $varData[2];
	$year = $varData[3];
	$quarter = $varData[4];
	$dept = $varData[5];
	$userType = $varData[6];
	$major = $varData[7];
	$percentFTE = $varData[8];
	$fundSrc = $varData[9];
	$fundDept = $varData[10];
	$pgmCode = $varData[11];
	$activity = $varData[12];
	$class = $varData[13];
	$projId = $varData[14];
	$courseId1 = $varData[15];
	$courseTitle1 = $varData[16];
	$numCredits1 = $varData[17];
	$courseId2 = $varData[18];
	$courseTitle2 = $varData[19];
	$numCredits2 = $varData[20];
	$courseId3 = $varData[21];
	$courseTitle3 = $varData[22];
	$numCredits3 = $varData[23];
	$courseId4 = $varData[24];
	$courseTitle4 = $varData[25];
	$numCredits4 = $varData[26];
	$courseId5 = $varData[27];
	$courseTitle5 = $varData[28];
	$numCredits5 = $varData[29];
	$courseId6 = $varData[30];
	$courseTitle6 = $varData[31];
	$numCredits6 = $varData[32];
	$email1 = $varData[33];
	$email2 = $varData[34];
	$email3 = $varData[35];
	$email4 = $varData[36];
	$email5 = $varData[37];

	fclose($userFile);

	// save the email in the next available spot
	if ($email3 == '')
	{
		$email3 = $emailOfApprover;
	}
	else if ($email4 == '')
	{
		$email4 = $emailOfApprover;
	}
	else if ($email5 == '')
	{
		$email5 == $emailOfApprover;
	}

	

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
