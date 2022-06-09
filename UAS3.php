<?php
session_start();

$koneksi = mysqli_connect('localhost','root','','kasir');

if (isset($_POST['tambahproduk'])){
    
    $nama_produk = $_POST['nama_produk'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];
    $stock = $_POST['stock'];

    $insert_produk = mysqli_query($koneksi,"INSERT INTO produk (nama_produk, deskripsi, harga, stock)
    VALUES ('$nama_produk', '$deskripsi', '$harga', '$stock')");

    if ($insert_produk) {
        header('location:stock.php');
    }else{
        echo '
        <script>
        alert("gagal tambah produk")
        window.location.href="stock.php"
        </script>';
    }
}
