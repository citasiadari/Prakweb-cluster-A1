
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Cita - 118140172</title>

	<style type="text/css">

	h1 {
		color: #444;
		background-color: transparent;
		font-size: 30px;
		font-weight:bold;
		margin: 0 0 14px 0;
		padding: 5px 5px 10px 15px;
        text-align: center;
        

	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px #F0F8FF;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
        bottom:0;
	}

	#container {
		margin: 10px;
		box-shadow: 0 0 8px #F0F8FF;
        text-align:center;
        background-color: #F0F8FF;
	} */
	</style>
</head>
<body>

<div id="container">
    <h1>Selamat Datang bun </h1>
    <p>login dulu ya</p>

    <form action="<?=base_url('login/cekLogin')?>" method="post" style= "align:" >
        <label for="username">Username:</label>
        <input type="text" id="username" name="username"><br><br>
        <label for="password">Password : </label>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Submit">
    </form>


	<p class="footer">Cita Sari Marito Siadari -118140172 </p>
</div>
</body>
</html>