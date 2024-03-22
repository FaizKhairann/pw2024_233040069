<?php 
$mahasiswa = [
    [
        "nama" => "Mohamad Faiz Khairan",
        "npm" => "233040069",
        "email" => "faiz233040069@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "d1.jpg"
    ],

    [
        "nama" => "Emmir Fahrezi",
        "npm" => "233040054",
        "email" => "emmir233040054@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "k1.jpg"
    ],

    [
        "nama" => "Fahri Rizqon Arsiansyah",
        "npm" => "233040062",
        "email" => "fahri233040062@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "k2.jpg"
    ],

    [
        "nama" => "Hikmat Pandu Raharja",
        "npm" => "233040056",
        "email" => "hikmat233040056@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "k3.jpg"
    ],

    [
        "nama" => "Andyka Khaerulana",
        "npm" => "233040072",
        "email" => "andyka233040072@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "k4jpg.jpg"
    ],

    [
        "nama" => "Nadhil Ikhwan Ashshiba Waluya",
        "npm" => "233040039",
        "email" => "nadhil233040039@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "k5.jpg"
    ],

    [
        "nama" => "Mohamad Hilmy Yasirurrizqy",
        "npm" => "233040047",
        "email" => "hilmy233040047@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "i1.jpg"
    ],

    [
        "nama" => "Ghani Aliyandi",
        "npm" => "233040049",
        "email" => "ghani233040049@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "k7.jpg"
    ],

    [
        "nama" => "Ikhwan Azhary",
        "npm" => "233040060",
        "email" => "ikhwan233040060@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "shiro T.jpg"
    ],

    [
        "nama" => "Zaki Ramadhan Wijaya",
        "npm" => "233040056",
        "email" => "zaki233040056@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "shin.jpg"
    ],
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>" alt="">
            </li>
            <li>Nama : <?= $mhs["nama"];?> </li>
            <li>NPM : <?= $mhs["npm"];?> </li>
            <li>Email : <?= $mhs["email"];?> </li>
            <li>jurusan : <?= $mhs["jurusan"];?> </li>
        </ul>
    <?php endforeach; ?>
</body>
</html>