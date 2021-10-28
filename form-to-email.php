<?php
if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
	echo 'error; you need to submit the form!';
}
$name = $_POST['name'];
$subject = $_POST['subject'];
$message = $_POST['message'];

//Validate first
if(empty($name)||empty($subject)) 
{
    echo 'Name and subject are mandatory!';
    exit;
}

$email_from = '<ashok.nayagam@gmail.com>';//<== update the email address
$email_subject = $subject;
$email_body = 'Message from user: $name.\n'.
    'Message:\n $message'.
    
$to = '<ashok.nayagam@gmail.com>';//<== update the email address
$headers = 'From: $email_from \r\n';
//Send the email!
mail($to,$email_subject,$email_body,$headers);
//done. redirect to thank-you page.
header('Location: thank-you.html');

// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = '/$inject/i';
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}
   
?> 