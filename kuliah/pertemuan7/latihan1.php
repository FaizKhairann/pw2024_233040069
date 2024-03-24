<?php 
// Variable Scope / Lingkup variabel
// $x = 10;

// function tampilX() {
//     global $x;
//     echo $x;
// }

// tampilX();

?>

<?php 
// SUPERGLOBALS
// variabel global milik PHP
// merupakan Array Associative
// var_dump($_SERVER);

?>

<?php 
// $_GET

$mahasiswa = [
    [
       "nama" => "Faiz", 
       "npm" => "233040069",
       "email" => "Faiz.233040069@mail.unpas.ac.id",
       "jurusan" => "Teknik Informatika",
       "gambar" => "k9.jpg"
    ],

    [
        "nama" => "mogi", 
        "npm" => "233040068",
        "email" => "mogi.233040068@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "k2.jpg"
     ]
   ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
    <?php foreach($mahasiswa as $mhs) : ?>
        <li>
            <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>
            &npm=<?= $mhs["npm"]; ?>
            &email=<?= $mhs["email"]; ?>
            &jurusan=<?= $mhs["jurusan"]; ?>
            &gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
        </li>
    <?php endforeach; ?>
    </ul>
</body>
</html>