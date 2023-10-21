<?php 
$koneksi = mysqli_connect("localhost","root","","db_11rpl3_28_nainasyafa");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>