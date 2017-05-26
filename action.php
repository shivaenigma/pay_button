<?php

$output = array(
	'success' => FALSE,
	'error'   => TRUE,
	'error_messages' => array(),
	'return_number' => '', 
);
$error_messages = array();

# If Name has error in it
//$output['error'] = TRUE;
//$error_messages['blockoPayBtnName'] = 'Please specify your Name';

# If Name has error in it
//$output['error'] = TRUE;
//$error_messages['blockoPayBtnEmail'] = 'Please specify a Valid Email';

# If there is any general error message
//$output['error'] = TRUE;
//$error_messages['blockoPayBtnMessage'] = 'General Error Message';

$output['error_messages'] = $error_messages;


# If there are no errors
$output['success'] = TRUE;
$output['return_number'] = '123456789ABCDEFGHIJKL';

echo json_encode($output);
exit();
