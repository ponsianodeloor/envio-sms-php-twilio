<?php
	//if ($_REQUEST['hdd_guardar'] == 1){
	ini_set('display_errors', 1);
	error_reporting(E_ALL);

	require __DIR__.'/twilio-php-master/Twilio/autoload.php';
	use Twilio\Rest\Client;

	//$usuario_celular = '+526959515971';
	$usuario_celular = '+593968894134';

	$sms = "mensaje de ponsiano";

	// Your Account SID and Auth Token from twilio.com/console
	$account_sid = 'SID';
	$auth_token = 'TOKEN';
	// In production, these should be environment variables. E.g.:
	// $auth_token = $_ENV["TWILIO_ACCOUNT_SID"]

	// A Twilio number you own with SMS capabilities
	$twilio_number = "+NUMBER";

	$client = new Client($account_sid, $auth_token);


	$client->messages->create(
	// Where to send a text message (your cell phone?)
	$usuario_celular,
	array(
		'from' => $twilio_number,
		'body' => $sms
	)
	);

	echo "
		<div class=\"alert alert-card alert-warning text-center\" role=\"alert\">
		SMS Enviado Correctamente!
		<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
		<span aria-hidden=\"true\">&times;</span>
		</button>
		</div>
	";
?>
