<?php 
// $mahasiswa = [
//     ["Faiz", "233040069", "Faiz.233040069@mail.unpas.ac.id", "Teknik Informatika"],
//     ["Bugi", "233040065", "Bugi.233040065@mail.unpas.ac.id", "Teknik Informatika"],
//     ["Mogi", "233040064", "Mugi.233040064@mail.unpas.ac.id", "Teknik Informatika"]
// ];

// array Associative
// definisinya sama seperti array numerik, kecuali keynya string yang kita buat sendiri
// Keynya adalah string yang kita buat sendiri

$mahasiswa = [
 [
    "nama" => "Faiz", 
    "npm" => "233040069",
    "email" => "Faiz.233040069@mail.unpas.ac.id",
    "jurusan" => "Teknik Informatika"
 ],

 [
    "nama" => "Bugi", 
    "npm" => "233040065",
    "email" => "Bugi.233040069@mail.unpas.ac.id",
    "jurusan" => "Teknik Informatika",
 ],

 [
    "nama" => "Mogi", 
    "npm" => "233040064",
    "email" => "Mogi.233040069@mail.unpas.ac.id",
    "jurusan" => "Teknik Informatika"
 ],

];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach($mahasiswa as $mhs) : ?>
    <ul>
        <li>NAMA :<?= $mhs["nama"] ?></li>
        <li>NPM :<?= $mhs["npm"] ?></li>
        <li>EMAIL :<?= $mhs["email"] ?></li>
        <li>JURUSAN :<?= $mhs["jurusan"] ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>