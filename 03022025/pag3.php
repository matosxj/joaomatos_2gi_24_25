<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AULA 4 - CICLO FOR</title>
    <style>
        div {
            width: 150px;
            font-family: Verdana;
            background-color: #C8F7C5;
            box-shadow: 10px 10px 5px #888888;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div>
        <table border="1">
            <tr>
                <td><b>Números</b></td>
                <td><b>Cubos</b></td>
    </tr>
    <?php
    for($i=1;$i<=5;$i++){
        $q=$i*$i*$i;
        echo "<tr><td>$i</td>";
        echo "<td>$q</td></tr>";
    }
    ?>
    </table>
</div>
</body>
</html>