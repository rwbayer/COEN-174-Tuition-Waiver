<?php

$(.'button').click(function(){

	$subject = "Tuition and Fees Authorization Form Rejected";
	$msg = "The form you submitted for approval has been rejected. PLease update the form and resubmit.";
	$header = "noreply@scutuitionform.com";
	
		


	$rejectEmail = mail($email1,$subject,$msg,$header);
}


?>
