<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan6a</title>
    <style>
        .abu {
            width: 50px;
            height: 50px;
            text-align: center;
            line-height: 50px;
            margin: 2px;
            display: inline-block;
            background-color: gray;
            border: 2px solid black;
        }

        .putih {
            width: 50px;
            height: 50px;
            text-align: center;
            line-height: 50px;
            margin: 2px;
            display: inline-block;
            background-color: white;
            border: 2px solid black;
        }
    </style>
</head>
<body>
    
    <?php 
    if(isset($_GET["nomor"])) {
        $nomor = $_GET["nomor"];
        for($i = $nomor; $i >= 1; $i--){
            for($t = 1; $t <= $i; $t++){
                if($i % 2 == 0){
                    echo "<div class= 'abu'>$i</div>";
                } else {
                    echo "<div class= 'putih'>$i</div>";
                }
            }
            echo "<br>";
        }
    } else {
    }

    ?>

</body>
</html>