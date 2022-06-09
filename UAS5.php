<?php
$get= mysqli_query($koneksi, "SELECT * FROM detal_pesanan p, produk pr, pelanggan pl WHERE 
p.id_produk=pr.id_produk AND id_pesanan='$idp'");
$i = 1;
while ($p = mysqli_fetch_array($get)) 
{
$qty = $p['qty'];
$harga = $p['harga'];
$namaproduk = $p['namaproduk'];
$deskripsi = $ap['deskripsi'];
$subtotal = $qty * $harga;
?>
<tr>
<td><?= $i++; ?></td>
<td><?= $namaproduk; ?></td>
<td>Rp.<?= number_format($harga); ?></td>
<td><?= number_format($qty); ?></td>
<td>Rp.<?= number_format($subtotal); ?></td>
<td>Edit | Delete</td>
</tr>
<?php
};
?>