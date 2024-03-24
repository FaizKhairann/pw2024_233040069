<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat+Brush&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            text-align: center;
            background-image: url(img/bg.jpg);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
            align-items: center;
            flex-direction: column;
        }

        h1 {
            color: black;
            font-size: 50px;
            font-family: "Caveat Brush", cursive;
        }

        button {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: blue;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        a {
            font-family: "Caveat Brush", cursive;
            text-decoration: none;
            color: white;
            font-size: 30px;
        }
    </style>
</head>
<body>
    <h1>Selamat, Datang Admin</h1>
    <button type="submit" name="submit"><a href="login.php">Logout</a></button>
</body>
</html>