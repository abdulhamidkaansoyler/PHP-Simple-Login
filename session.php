<?php

include 'ayar.php';
// Yeni Bağlantı Oluşturma
$baglanti = mysqli_connect(DB_HOST, DB_USER, DB_SIFRE, DB_ADI);
session_start(); // Session Başlatma
// Session Bilgisini Tutma
$user_check = $_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$query = "SELECT kullanici_adi from uyeler where kullanici_adi = '$user_check'";
$ses_sql = mysqli_query($baglanti, $query);
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['kullanici_adi'];
?>