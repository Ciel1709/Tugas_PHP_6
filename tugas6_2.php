<?php 
echo "==================================<br>";
$harga_jambu = 15000;
$jumlah_kardus = 6;
$kilo_kardus = 5;
$harga_kardus = 2000;

$total = $jumlah_kardus*$kilo_kardus*$harga_jambu+2*$harga_kardus;

echo "<br>Harga Jambu = Rp ".$harga_jambu."/ Kg";
echo "<br>Harga Kardus = Rp ".$harga_kardus."/ pcs";
echo "<br>Total Penjualan (Dus dan Jambu) = Rp ".$total;

echo "<br><br>==================================";
?>