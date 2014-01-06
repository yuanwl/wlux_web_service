<?php
function _session_post_startnexttask ($link, $logData, $debugState) {
require 'config_files.php';
require 'db_utils.php';
	// initialize the response buffer
	$response = '';
	// initialize the debug values
	if ($debugState) {
		$response['debug']['module'] = __FILE__;
		$response['debug']['cmdData'] = $logData;
	}
    // not implemented
	$errData['status'] = 501;
	$errData['message'] = 'Command not implemented.';
	$response['error'] = $errData;
	
	return $response;
}
?>