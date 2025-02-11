<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AULA 6 - Array Associativo</title>
</head>
<body>
    <?php
        $idades= array( "Pedro"=>20 , "Beatriz"=>17 , "Joana"=>19 );
        echo"O array idades é composto por: ";
        print_r($idades);
        echo"<br><br>";
        echo "A Joana tem " . "<b>" . $idades['Joana'] . "</b>" . " anos.";
        echo"<br>";
        $idades['Beatriz']=18; //atualiza a idade de Beatriz
        echo"<br>";
        echo "A Beatriz tem agora " . "<br>" . $idades['Beatriz'] . "</b>" . " anos.";
        echo"<hr>";
        var_dump($idades);
    ?>
</body>
</html>