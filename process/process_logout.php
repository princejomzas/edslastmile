<?php
	ob_start();
	session_start();
	unset($_SESSION);
	session_destroy();
	session_write_close();
	$_SESSION['is_login'] = FALSE;
	header('Location: ../index.php');
	die;
?>
