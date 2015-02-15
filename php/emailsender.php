<?php
require_once 'Mailchimp.php';
require_once 'ErrorTracker.php';

$apikey = '72d29714bee2a636323a12c523596fc7-us10';
$listid = '62a014d176'; // UoCore Mobile Subscribers

$email = $_POST["EMAIL"];
$MailChimp = new Mailchimp($apikey);

try {
	$result = $MailChimp->lists->subscribe($listid,
			array('email'=>$email),
			null,
			"html",
			false,
			false,
			false
	);
	
} catch (Exception $e) {
	$ErrorTracker = new ErrorTracker();
	$ErrorTracker->notifyError($email, $e->getMessage());
}


header("Location: /confirmation");

?>