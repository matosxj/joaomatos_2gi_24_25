<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AULA 4 - CICLO WHILE</title>
    <style>
        div {
            width: 50px;
            font-family: Verdana;
            background-color: yellow;
            box-shadow: 10px 10px 5px #888888;
            padding: 10px;
        }
</head>
<body>
    <div>
        <?php
            $c = 10;
            while ($c >= 1) {
                echo $c . "<br/>";
                $c--;
            }
        ?>
</body>
</html>