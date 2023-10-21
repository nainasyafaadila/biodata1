<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$kodeBarang = $_POST['kodeBarang'];
$namaBarang = $_POST['namaBarang'];
$satuanBarang = $_POST['satuanBarang'];
$stokBarang = $_POST['stokBarang'];
$hargaBarang = $_POST['hargaBarang'];

// menginput data ke database
mysqli_query($koneksi,"insert into tb_aodrabaru values('','$kodeBarang','$namaBarang','$satuanBarang','$stokBarang','$hargaBarang')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>