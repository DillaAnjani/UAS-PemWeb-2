<?php
require 'function.php';

if (isset($_GET['idp'])) {
    $idp = $_GET['idp'];
    
    $ambilnamapelanggan = mysqli_query($koneksi,"SELECT * FROM pesanan p, pelanggan pl, where p.id_pelanggan=pl.id_pelanggan AND p.id_pesanan='$idp'");
    $np = mysqli_fetch_array($ambilnamapelanggan);
    $namapel = $np['nama pelanggan'];
    $idpel = $idp['id-pelanggan'];
} else {
    header('location:index.php');
}
?>