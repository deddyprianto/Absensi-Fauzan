<?php
	ob_start();
	mysqli_connect("localhost", "root", "") or die (mysqli_error());
	mysqli_select_db("db_absensi") or die (mysqli_error());
?>