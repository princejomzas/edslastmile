<?php
session_start();

$dataObject = $_POST['myData'];
$adpwd = $dataObject['password'];

if($adpwd != "AdminLM1234") {
	$_SESSION['is_login'] = FALSE;
    echo 0;
}
else
{
	$_SESSION['USR'] = "admin";
	$_SESSION['LVL'] = "1";
	$_SESSION['is_login'] = TRUE;
    echo 1;
}
?>
