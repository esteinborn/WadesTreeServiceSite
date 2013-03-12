<?php
// CHANGE THE VARIABLES BELOW
$Name = Trim(stripslashes($_POST['name']));
$Tel = Trim(stripslashes($_POST['phone']));
$Comments = Trim(stripslashes($_POST['comments']));
$EmailFrom = "FreeEstimate@wadestreeservice.com";
$EmailTo = "wadestreeservice@yahoo.com";
$Subject = "Free Estimate for: $Name";

// prepare email body text

$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Phone: ";
$Body .= $Tel;
$Body .= "\n";
$Body .= "Comments: ";
$Body .= $Comments;
$Body .= "\n";
// send email

$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// CHANGE THE URL BELOW TO YOUR "THANK YOU" PAGE
if ($success){
  echo "Success";
}
else{
  echo "Failed";
}
?>