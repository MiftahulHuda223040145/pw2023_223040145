<?php 
    echo "<h4>Menghitung Luas Lingkaran</h4>";
    function hitungLuasLingkaran($n) {
        echo "Jari-jari = $n cm <br>";
        echo "Luas lingkaran = " . (3.14 * $n * $n) . "cm²";
    }

    hitungLuasLingkaran(10);

    echo "<h4>Menghitung Keliling Lingkaran</h4>";
    function hitungKelilingLingkaran($n) {
        echo "Jari-jari $n cm <br>";
        echo "Keliling lingkaran = " . (3.4 * ($n + $n)) . " cm <hr>";
    }

    hitungLuasLingkaran(20);
?>