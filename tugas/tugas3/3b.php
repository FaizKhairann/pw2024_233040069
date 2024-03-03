<?php 
function urutanAngka ($angka)
{
    $a = 1;
    for ($c = 1; $c <= $angka; $c++){
        for ($d = 1; $d <= $c; $d++){
            echo $a . " ";
            $a++;
        }
        echo "<br>";
    }
}
urutanAngka(5);
?>