<?php
include 'session.php';
if (!isset($_SESSION['login_user'])) {
	header("location: index.php"); // Ana Sayfaya Yönlendiriyor
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Hoşgeldiniz</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="profile">
<b id="welcome">Hoşgeldiniz : <i><?php echo $login_session; ?></i></b>
<b id="logout"><a href="logout.php">Çıkış Yap</a></b>
</div>
</body>
</html>