<?php 

    function urutanAngka($angka){
        $start = 1;
        for($i = 1; $i <= $angka; $i++){
            for($j = 1; $j <= $i; $j++){
                echo "$start" . " ";
                $start++;
            }
            echo "<br>";
        }
    }

urutanAngka(5);

?>