<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$qty = $_POST['qty'];
$harga = $_POST['harga'];
$id = $_POST['id'];

$query="UPDATE produk SET nama_produk='$nama', qty='$qty', harga='$harga' WHERE id='$id'";
mysqli_query($koneksi, $query);

header("location:index.php");
?>