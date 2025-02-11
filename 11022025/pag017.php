<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <title> AULA 6 - Array Indexado</title>
</head>
<body>
    
    <?php
        $carros = array("Porsche", "BMW", "Ferrari", "Mercedes");
        $tamanho = count($carros);

        for($x = 0; $x < $tamanho; $x++) {
        echo $carros[$x];
        echo "<br>";
        }
    ?>
</body>
</html>