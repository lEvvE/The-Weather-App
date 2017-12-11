<?php

//Om vi väljer att logga ut och klickar på knappen så avslutas sessionen helt och vi blir tillbakaskickade till index.php
if (isset($_POST['submit'])) {
	session_start();
	session_unset();
	session_destroy();
	header("Location: ../index.php");
	exit();
}