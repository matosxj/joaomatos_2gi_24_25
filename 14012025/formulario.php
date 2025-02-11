<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client-side vs Server-side</title>
</head>
<body>
    <?php
    $utilizador = $_GET['Login'];
    $passaword = $_GET['senha'];
    echo "Olá $utilizador !<br> a sua senha é $passaword <br>";
    ?>
    <hr>
   <a href="Login.html"><button>Voltar</button> </a>
</body>
</html>     