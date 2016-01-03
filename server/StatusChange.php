<?php
require 'push.php';

// this is used to read POST parameters because the server I am using has issues
$rest_json = file_get_contents("php://input");
$_POST = json_decode($rest_json, true);

// make sure the parameter is there
if ($_POST["status"] == NULL) {
  die('');
}

$status = $_POST["status"];
$message = "has changed to $status";
$myToken = ""; // put your device token here
pushNotification($myToken, $message);

?>
