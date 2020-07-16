<?php
include 'koneksi.php';
$nama_produk = $_POST['nama_produk'];
$keterangan = $_POST['keterangan'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];

mysql_query("INSERT INTO produk VALUES('','$nama_produk','$keterangan','$harga','$jumlah')");

header("location:index.php?pesan=input");

?>