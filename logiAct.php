<?php 
//Hasil inputan dari file login
$nama = $_POST['nama']; 
$email = $_POST['email'];
include "time.php";

//Konfirmasi kelengkapan data
if (empty($_POST['nama']) || empty($_POST['email'])) {
     header("Location: fail.php");
} else {
    echo"<center> Nama : ".$_POST['nama']."</center><br>";
    echo"<center> Email : ".$_POST['email']."</center><br>";
    echo "<br>";
    echo "<center> Waktu Login : $waktu $tanggal"."</center>";
}
?>
