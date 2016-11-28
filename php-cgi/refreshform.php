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
function removeCommas($str){
  $array=explode(",", $str);
  $size=count($array);
  $newStr='';
  for($x=0; $x<$size; $x++){
    $newStr.=$array[$x];
  }
  return $newStr;
}

$name2 = removeCommas($_POST['name1']);
$id2 = removeCommas($_POST['id1']);
$advisor2 = removeCommas($_POST['advisor1']);
$year2 = removeCommas($_POST['year1']);
$quarter2 = removeCommas($_POST['quarter1']);
$dept2 = removeCommas($_POST['dept1']);
$userType2 = removeCommas($_POST['userType1']);
$major2 = removeCommas($_POST['major1']);
if($userType2 == 'ta'){
	$percentFTE2 = $_POST['percentFTE1'];
}else{
	$fundSrc2 = removeCommas($_POST['fundSrc1']);
	$fundDept2 = removeCommas($_POST['fundDept1']);
	$pgmCode2 = removeCommas($_POST['pgmCode1']);
	$activity2 = removeCommas($_POST['activity1']);
	$class2 = removeCommas($_POST['curClass1']);
	$projId2 = removeCommas($_POST['projId1']); 
}

$courseId12 = removeCommas($_POST['courseId11']); 
$courseTitle12 = removeCommas($_POST['courseTitle11']);
$numCredits12 = removeCommas($_POST['numCredits11']);
$courseId22 = removeCommas($_POST['courseId21']);
$courseTitle22 = removeCommas($_POST['courseTitle21']);
$numCredits22 = removeCommas($_POST['numCredits21']);
$courseId32 = removeCommas($_POST['courseId31']);
$courseTitle32 = removeCommas($_POST['courseTitle31']);  
$numCredits32 = removeCommas($_POST['numCredits31']);
$courseId42 = removeCommas($_POST['courseId41']);
$courseTitle42 = removeCommas($_POST['courseTitle41']); 
$numCredits42 = removeCommas($_POST['numCredits41']);
$courseId52 = removeCommas($_POST['courseId51']);
$courseTitle52 = removeCommas($_POST['courseTitle51']);
$numCredits52 = removeCommas($_POST['numCredits51']);
$courseId62 = removeCommas($_POST['courseId61']);
$courseTitle62 = removeCommas($_POST['courseTitle61']);
$numCredits62 = removeCommas($_POST['numCredits61']);
$studentFeeCheck2 = $_POST['studentFeeCheck1'];

$email2 = $_POST['email1'];
$semail2 = $_POST['semail1'];


$formId = generateRandomString(15);
$filename = $formId.".txt";

$subject = "Approval Requested";
$header = "From: no-reply@SCUTuitionForm.com";
$url = "students.engr.scu.edu/~rbayer/COEN174/php-cgi/requestApproval.php?key=".$formId;
$msg = "You're approval has been requested for the Tuition & Fees Authorization Form provided at the following link: ".$url;
$mail = mail($email2, $subject, $msg, $header);
if($mail){
	echo "email sent successfully";
}else{
	echo "email failed to send";
}
$destination = "/DCNFS/users/web/pages/rbayer/COEN174/data/".$filename;
$userInfo = $name2.",".$id2.",".$advisor2.",".$year2.",".$quarter2.",".$dept2.",".$userType2.",".$major2.",";
if($userType2 == 'ta'){
	$userInfo .= $percentFTE2.",,,,,,,";
}else{
	$userInfo .= ",".$fundSrc2.",".$fundDept2.",".$pgmCode2.",".$activity2.",".$class2.",".$projId2.",";
}
$courses = $courseId12.",".$courseTitle12.",".$numCredits12.",".$courseId22.",".$courseTitle22.",".$numCredits22.",".$courseId32.",".$courseTitle32.",".$numCredits32.",".$courseId42.",".$courseTitle42.",".$numCredits42.",".$courseId52.",".$courseTitle52.",".$numCredits52.",".$courseId62.",".$courseTitle62.",".$numCredits62.",";

$txt = $userInfo.$courses.$studentFeeCheck2.",".$semail2.",".$email2.",,,";
$myfile = fopen($destination, "w");
fwrite($myfile, $txt);
fclose($myfile);

?>

