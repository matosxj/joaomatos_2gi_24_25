<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 6 - array indexado- ciclo foreach </title>
</head>
<body>
    <?php
    $frutas = ["Amoras" , "Framboesas", "Morangos", "Cerejas"];
    echo $chave. " => " . $valor. "<br>";
}
echo"<hr>"; 
echo"Imprime apenas o valor: <br>";

foreach ($frutas as $valor){
    echo $valor . "<br>";

}
?>


</body>
</html>