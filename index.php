<?php
include 'login.php'; //Login Sayfasını Dahil Etme
if (isset($_SESSION['login_user'])) {
	header("location: profile.php"); // profil sayfasına yönlendirme
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>Login Sayfası</title>
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/fonts/ionicons.min.css">
	<link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
	<link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
	<div class="login-dark">
		<form method="POST">
			<h2 class="sr-only">Login Form</h2>
			<div class="illustration"><h1>AHS Login</h1><i class="icon ion-ios-locked-outline"></i></div>
			<div class="form-group"><input class="form-control" type="username" name="p_adi" placeholder="Email"></div>
			<div class="form-group"><input class="form-control" type="password" name="p_sifre" placeholder="Password"></div>
			<div class="form-group"><button class="btn btn-primary btn-block" name="GONDER" type="submit">Giriş Yap</button></div><p style="text-align: center;"><?php echo $hata; ?></p></form>

	</div>
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
