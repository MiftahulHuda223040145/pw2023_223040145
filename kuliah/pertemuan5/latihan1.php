<?php 

// ARRAY

// Membuat array
$hari = array('Senin', 'Selasa', 'Rabu');
$bulan = ['Januari', 'Februari', 'Maret'];
$myArray = ['Miftahul', '11', 'true'];
$binatang = ['🦍💨', '🐃💨', '🦕💨'];

// Mencetak array
echo $hari[0];
echo "<br>";
echo $bulan[1];
echo "<br>";

// Mencetak seluruh isi array
// var_dump, print_r
var_dump ($binatang);
echo "<br>";
print_r ($bulan);
echo "<br>";
var_dump ($myArray);

echo "<hr>";

// Manipulasi Array
// Mengguankan index
$hari[3]= 'Kamis';
print_r($hari);

echo "<hr>";

// Menambahkan elemen di akhir dengan indexnya
$hari[] = "Jum'at";
$hari[] = 'Sabtu';
print_r($hari);

echo "<hr>";

// Menambahkan elemen di akhir menggunakan array_push
array_push($bulan, 'April', 'Mei', 'Juni');
print_r($bulan);
?>