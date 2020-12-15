<?php

	global $con;

	$con = mysqli_connect('localhost','root','','Minggu6');

	if(!$con)
	{
		echo 'Tidak dapat terhubung ke database';
		die();
	}