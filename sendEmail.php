<?php
if(isset($_POST['email'])) {
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "dengnan@umich.edu";
    $email_subject = "Email from Portfolio";
 
    function died($error) {
        // your error code can go here
        echo "I am very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['firstName']) ||
        !isset($_POST['lastName']) ||
        !isset($_POST['place']) ||
        !isset($_POST['profession']) ||
        !isset($_POST['company']) ||
        !isset($_POST['message']) ||
        !isset($_POST['email'])) {
        died('I am sorry, but there appears to be a problem with the form you submitted.');       
    }
 
     
 
    $firstName = $_POST['firstName']; // required
    $lastName = $_POST['lastName']; // required
    $place = $_POST['place']; // required
    $profession = $_POST['profession']; // required
    $company = $_POST['company']; // required
    $message = $_POST['message']; // required
    $email = $_POST['email']; // required 
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$firstName)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
 
  if(!preg_match($string_exp,$lastName)) {
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
  }
 
  if(strlen($message) < 2) {
    $error_message .= 'The message you entered do not appear to be valid.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  } 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message = "Hello Candice," ."\n"."\n";
    $email_message .= "  This is ".clean_string($firstName)." ".clean_string($lastName);  
    $email_message .= ". I am from ".clean_string($place)."\n";
    $email_message .= "  I am a ".clean_string($profession).", working in ".clean_string($company)."\n";
    $email_message .= "  ".clean_string($message)."\n";
    $email_message .= "  Looking forward to hear from you soon. ";
    $email_message .= "And You can reach me back on ".clean_string($email)."\n"."\n";
    $email_message .= "Best Regards,"."\n".clean_string($firstName)." ".clean_string($lastName)."\n";
 
// create email headers
$headers = 'From: '.$email."\r\n".
'Reply-To: '.$email."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
header('Location: Contact.php');
exit();
}
?>