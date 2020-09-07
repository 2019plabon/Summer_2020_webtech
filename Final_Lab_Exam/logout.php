<?php

	session_start();
	session_destroy();

	header(' ../service/signin.php');

?>