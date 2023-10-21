<!DOCTYPE html>
<html>
<head>
	<title>Toko Aodra Baru</title>
</head>
<body>
 
	<h2>TAMBAH MENU</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA BARANG</h3>
	<form method="post" action="tambah_aksi.php">
		<table>
        <td>Kode Barang</td>
					<td>
						<input type="hidden" name="id" value="">
						<input type="text" name="kodeBarang" value="">
					</td>
				</tr>
				<tr>
					<td>Nama Barang</td>
					<td><input type="text" name="namaBarang" value=""></td>
				</tr>
				<tr>
					<td>Satuan Barang</td>
					<td><input type="text" name="satuanBarang" value=""></td>
				</tr>
                <tr>
					<td>Stok Barang</td>
					<td><input type="text" name="stokBarang" value=""></td>
				</tr>
                <tr>
					<td>Harga Barang</td>
					<td><input type="text" name="hargaBarang" value=""></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
		</table>
	</form>
</body>
</html>