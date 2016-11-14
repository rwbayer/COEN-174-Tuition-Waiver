<?php	
	$key = $_POST['key'];
	$emailOfNextApprover = $_POST['emailOfApprover'];

	$nameOfFile = "/DCNFS/users/web/pages/rbayer/COEN174/data/". $key . ".txt";
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
	$studentFeeCheck = $varData[33];
	$email1 = $varData[34];
	$email2 = $varData[35];
	$email3 = $varData[36];
	$email4 = $varData[37];
	$email5 = $varData[38];

	fclose($userFile);

	// save the email in the next available spot
	if ($email3 == '')
	{
		$email3 = $emailOfNextApprover;
	}
	else if ($email4 == '')
	{
		$email4 = $emailOfNextApprover;
	}
	else
	{
		$email5 = $emailOfNextApprover;
	}


	$subject = "Approval Requested";
	$header = "From: no-reply@SCUTuitionForm.com";
	$url = "students.engr.scu.edu/~rbayer/COEN174/php-cgi/requestApproval.php?key=".$key;
	$msg = "You're approval has been requested for the Tuition & Fees Authorization Form provided at the following link: ".$url;
	if ($emailOfNextApprover != "isScottAndrews")
	{
		$mail = mail($emailOfNextApprover, $subject, $msg, $header);
		if($mail)
		{
			echo("email sent successfully");
		}
		else
		{
			echo("email failed to send");
		}
	}
	else
	{
		echo("Successfully approved. Use the print button or your browser to print.");
	}

	$userInfo = $name.",".$id.",".$advisor.",".$year.",".$quarter.",".$dept.",".$userType.",".$major.",";
	if($userType == 'ta')
	{
		$userInfo .= $percentFTE.",,,,,,,";
	}
	else
	{
		$userInfo .= ",". $fundSrc.",".$fundDept.",".$pgmCode.",".$activity.",".$class.",".$projId.",";
	}

	$courses = $courseId1.",".$courseTitle1.",".$numCredits1.",".$courseId2.",".$courseTitle2.",".$numCredits2.",".$courseId3.",".$courseTitle3.",".$numCredits3.",".$courseId4.",".$courseTitle4.",".$numCredits4.",".$courseId5.",".$courseTitle5.",".$numCredits5.",".$courseId6.",".$courseTitle6.",".$numCredits6.",";

	$txt = $userInfo.$courses.$studentFeeCheck.",".$email1.",".$email2.",".$email3.",".$email4.",".$email5;
	$myfile = fopen($nameOfFile, "w");
	fwrite($myfile, $txt);
	fclose($myfile);

?>
