<?php
include 'koneksi.php';

$id = $_GET['id'];
$query="DELETE from produk WHERE id='$id'";
mysqli_query($koneksi, $query);
header("location:index.php");
?>