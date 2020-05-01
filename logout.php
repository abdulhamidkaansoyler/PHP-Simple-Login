<?php
session_start();
if (session_destroy()) {
	//Session Kapatma
	header("Location: index.php"); // AnaSayfaya Yönlendiriliyor.
}
?>