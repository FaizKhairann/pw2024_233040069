<?php 

// Luas
$r = 10;

    echo "<h4>Menghitung Luas Lingkaran</h4>";
    function hitungLuasLingkaran($r)
    {
        return 3.14 * $r * $r;     
    }

    echo "Jari-jari = " . $r . "cm";
    echo "<br>";
    echo "Luas Lingkaran =" . hitungLuasLingkaran($r) . "cm<sup>2</sup>";

    echo "<hr>";

// Keliling
$r2 = 20;

    echo "<h4>Menghitung Keliling Lingkaran</h4>";
    function hitungKelilingLingkaran($r2)
    {
        $keliling = 3.14 * 2 * $r2;
        return $keliling . " cm ";
    }

    echo "Jari-jari = " . $r2 . "cm";
    echo "<br>";
    echo "Keliling Lingkaran =" . hitungKelilingLingkaran($r2);
    
    echo "<hr>";
?>