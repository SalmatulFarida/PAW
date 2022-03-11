<?php
// code fungsi
function penjumlahan($angka1, $angka2)
{
    $a = $angka1;
    $b = $angka2;
    $hasil = $a + $b;
    return $hasil;
}
//code pemanggil fungsi
$hasil1 = penjumlahan(7,5);
$hasil2 = penjumlahan(6,9);
$hasil3 = penjumlahan(3,6);
//pemanggilan 1
echo " hasil penjumlahan 1 = $hasil1 </br>";
//pemanggilan 2
echo " hasil penjumlahan 2 = $hasil2 </br>";
//pemanggilan 3
echo " hasil penjumlahan 3 = $hasil3 </br>";
?>
