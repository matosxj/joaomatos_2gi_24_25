<!DOCTYPE html>
<html lang="pt-pt">
<head>
<meta charset="UTF-8">
    <title> AULA 6 - Array Indexado - Ciclo foreach </title>
<body>
    <?php

        $frutas = ["Amoras" , "Framboesas" , "Morangos" , "Cerejas" ];

        echo"Imprime o par Chave => Valor: <br>;
        // Foram com chave
        foreach($frutas as $chave => $valor){
            echo $chave . " => .$valor . "<br>";
        }

        echo"<hr>"; //bara horizontal para dividir

        echo"Imprime apenas o valor: <br>";
        //Forma sem Chave
        foreach($fruta as $valor){
            echo $valor . "<br>";
        }
    ?>
</body>
</html>