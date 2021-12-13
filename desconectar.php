<?php

	session_start();

	/*
	if (empty($_SESSION['admin'] == 'no' || $_SESSION['admin'] == 'si'))
	{
		// code...
	}
	*/

	session_destroy();

	header('Location:index.php');

?>