<?php
class ErrorTracker
{
    public $reportingEmail = 'anton.rogachevskiy@gmail.com';

    // method declaration
    public function notifyError($email, $error) {
    	
    	// To send HTML mail, the Content-type header must be set
    	$headers  = 'MIME-Version: 1.0' . "\r\n";
    	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    	$message = sprintf("Error while subscribing.<br/><b>Email:</b>%s<br/><b>Message:</b>%s", $email, $error);

        mail($this->reportingEmail, "uoCore Subscription Error", $message, $headers);
    }
}
?>