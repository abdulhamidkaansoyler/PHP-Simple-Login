<?php
include 'ayar.php';
session_start(); // Session Başlatma
$hata = ''; // Hata Mesajlarını Depolama
if (isset($_POST['GONDER'])) {
	if (empty($_POST['p_adi']) || empty($_POST['p_sifre'])) {
		$hata = "Kullanıcı Adı veya Şifre Boş bırakılamaz";
	} else {
// Kullanıcı adı ve Şifreyi Tanımlama
		$k_adi = $_POST['p_adi'];
		$k_sifre = $_POST['p_sifre'];
// Yeni Bağlantı Oluşturma
		$baglanti = mysqli_connect(DB_HOST, DB_USER, DB_SIFRE, DB_ADI);
// SQL Sorgusuyla Kullanıcı eşleştirme
		$query = "SELECT kullanici_adi, kullanici_sifre from uyeler where kullanici_adi=? AND kullanici_sifre=? LIMIT 1";
// SQL sızmaya karşı güvenlik yöntemi
		$stmt = $baglanti->prepare($query);
		$stmt->bind_param("ss", $k_adi, $k_sifre);
		$stmt->execute();
		$stmt->bind_result($k_adi, $k_sifre);
		$stmt->store_result();
		if ($stmt->fetch()) //Satır İçeriği Getiriliyor {
		{
			$_SESSION['login_user'] = $k_adi;
		}
		// Session Kurma
		header("location: profile.php"); // profil sayfasına yönlendirme
	}
	mysqli_close($baglanti); // Bağlantıyı Kapatma
}
?>