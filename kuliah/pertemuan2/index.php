<?php  
$nama = 'Faiz';
$mata_kuliah = 'Pemrograman Web'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 2</title>
</head>
<body>
    <h1>
    <?php echo "Hello, $nama!"; ?>
    </h1>
    <p><?php echo $mata_kuliah; ?></p>
    <p><?php echo "Halo nama saya, $nama, saya sedang kuliah <em>\"$mata_kuliah.\"</em>" ?></p>
</body>
</html>