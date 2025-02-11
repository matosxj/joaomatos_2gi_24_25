<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP - Passar parâmetros pela URL</title>
</head>
<body>
    <?php
        #Passar parametros pela URL - Test de Funções 
        $n1 = $_GET["x"];  //o valor parametro x é passado para a variável $n1
        $n2 = $_GET["y"]; //o valor parametro y é passado para a variável $n2



        echo "<h2> OS PARAMETROS recebidos são: $n1 e $n2 </h2>";
        echo " O valor absoluto de $n1 é." , abs($n1);
        echo "<br> O valor de $n1 <sup>$n2 é"  . pow($n1,$n2);
        echo "<br> A raiz  quadrada de $n1 é". sqrt($n1);
        echo "<br> O valor se $n2 arredondado é ". round($n2);
        echo "<br> a parte interira de $n2  é " . intval($n2);
        echo "<br> O valor se $n1 em valor monetário é ". number_format($n1,2) . "£"


        //abrir o browser passando os parâmetros pela URL
        ?>
</body>
</html>