<!DOCTYPE html>
<html>
<head>
	<title>Toko Aodra Baru</title>
</head>
<body>
 
	<h2>DAFTAR NAMA BARANG</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT BARANG</h3>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from tb_aodrabaru where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>Kode Barang</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="kodeBarang" value="<?php echo $d['kodeBarang']; ?>">
					</td>
				</tr>
				<tr>
					<td>Nama Barang</td>
					<td><input type="text" name="namaBarang" value="<?php echo $d['namaBarang']; ?>"></td>
				</tr>
				<tr>
					<td>Satuan Barang</td>
					<td><input type="text" name="satuanBarang" value="<?php echo $d['satuanBarang']; ?>"></td>
				</tr>
                <tr>
					<td>Stok Barang</td>
					<td><input type="text" name="stokBarang" value="<?php echo $d['stokBarang']; ?>"></td>
				</tr>
                <tr>
					<td>Harga Barang</td>
					<td><input type="text" name="hargaBarang" value="<?php echo $d['hargaBarang']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>