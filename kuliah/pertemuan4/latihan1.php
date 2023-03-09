<?php 
    
$angka = 10;
$angka2 = 9;

// ($angka) yang ada pada function disebut parameter

function cek_genap_ganjil($angka) {
    if ($angka % 2 == 1) {
        return "$angka adalah bilangan GANJIL!";
    } else {
        return "$angka adalah bilangan GENAP!";
    }

}

/* jika didalam function return diganti dengan echo maka argument untuk menampilkan nilainya
* hanya menggunakan argument tidak perlu menggunakan echo lagi
*/

echo cek_genap_ganjil($angka); // ini adalah argument

// cek jika $angka dibagi 2, sisa nya 1

echo "<br>";

if ($angka2 % 2 == 1) {
    echo "$angka2 adalah bilangan GANJIL!";
} else {
    echo "$angka2 adalah bilangan GENAP!";
}

?>