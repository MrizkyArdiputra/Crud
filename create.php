<?php
include 'koneksi.php';

    $nama = $_POST['nama'];
    $qty = $_POST['qty'];
    $harga = $_POST['harga'];

    $sql_create = "INSERT INTO produk (nama_produk,qty,harga) VALUES ('$nama','$qty','$harga')";

    $koneksi->query($sql_create);
    
      
    $koneksi->close();
    
    header("location:index.php");

?>
