<?php
function generateRandomString($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
$name2 = $_POST['name1'];
$id2 = $_POST['id1'];
$advisor2 = $_POST['advisor1'];
$year2 = $_POST['year1'];
$quarter2 = $_POST['quarter1'];
$dept2 = $_POST['dept1'];
$userType2 = $_POST['userType1'];
$major2 = $_POST['major1'];
if($userType2 == 'ta'){
	$percentFTE2 = $_POST['percentFTE1'];
}else{
	$fundSrc2 = $_POST['fundSrc1'];
	$fundDept2 = $_POST['fundDept1'];
	$pgmCode2 = $_POST['pgmCode1'];
	$activity2 = $_POST['activity1'];
	$class2 = $_POST['curClass1'];
	$projId2 = $_POST['projId1']; 
}

$courseId12 = $_POST['courseId11']; 
$courseTitle12 = $_POST['courseTitle11'];
$numCredits12 = $_POST['numCredits11'];

$courseId22 = $_POST['courseId21'];
$courseTitle22 = $_POST['courseTitle21'];
$numCredits22 = $_POST['numCredits21'];
$courseId32 = $_POST['courseId31'];
$courseTitle32 = $_POST['courseTitle31'];  
$numCredits32 = $_POST['numCredits31'];
$courseId42 = $_POST['courseId41'];
$courseTitle42 = $_POST['courseTitle41']; 
$numCredits42 = $_POST['numCredits41'];
$courseId52 = $_POST['courseId51'];
$courseTitle52 = $_POST['courseTitle51'];
$numCredits52 = $_POST['numCredits51'];
$courseId62 = $_POST['courseId61'];
$courseTitle62 = $_POST['courseTitle61'];
$numCredits62 = $_POST['numCredits61'];

$email2 = $_POST['email1'];

$formId = generateRandomString(15);
$filename = $formId.".txt";

$subject = "Approval Requested";
$header = "From: no-reply@SCUTuitionForm.com";
$url = "students.engr.scu.edu/~rbayer/COEN174/requestApproval.php?key=".$formId;
$msg = "You're approval has been requested for the Tuition & Fees Authorization Form provided at the following link: ".$url;
$mail = mail($email2, $subject, $msg, $header);
if($mail){
	echo "email sent successfully";
}else{
	echo "email failed to send";
}
$destination = "data/".$filename;
$txt = $name2.",".$id2.",".$advisor2.",".$year2.",".$quarter2.",".$dept2.",".$major2.",".$userType2.",".$email2;
$myfile = fopen($destination, "w");
fwrite($myfile, $txt);
fclose($myfile);

?>

