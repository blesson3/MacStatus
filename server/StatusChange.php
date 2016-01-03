<?php
require 'push.php';

// used to read POST parameters because the server I am using has issues
$rest_json = file_get_contents("php://input");
$_POST = json_decode($rest_json, true);

// make sure the parameter is there
if ($_POST["status"] == NULL) {
  die('');
}

$status = $_POST["status"];
$message = "has changed to $status";
$myToken = "392fb833db774bc2f384001fe164261e35dfb02f076dd9afa2803a84236f4482";
pushNotification($myToken, $message);

?>
