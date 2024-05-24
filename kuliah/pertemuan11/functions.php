<?php
function koneksi()
{
    $db = mysqli_connect('localhost', 'root', '', 'pw2024_233040069') or die('Koneksi ke DB gagal!');

    return $db;
}

function query($sql)
{
    //Koneksi ke Database
    $conn = koneksi();

    //Lakukan query ke tabel mahasiswa
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    //Menyiapkan data mahasiswa (fetch)
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function tambah($data)
{
    $conn = koneksi();

    $nama = htmlspecialchars($data['nama']);
    $nim = htmlspecialchars($data['nim']);
    $email = htmlspecialchars($data['email']);
    $jurusan = htmlspecialchars($data['jurusan']);

    $sql = "INSERT INTO mahasiswa
            VALUES (null, '$nama', '$nim', '$email', '$jurusan')
            ";

    mysqli_query($conn, $sql) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id") or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}
