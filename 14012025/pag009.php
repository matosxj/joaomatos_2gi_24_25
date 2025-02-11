<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Passar parâmetros pela URL</title>
</head>
<body>
   <?php
   #Passar parametros pela Url 
   
   $n1 = $_GET[a];  //o valor parametro a é passado para a variável $n1
   $n2 = $_GET[b]; //o valor parametro a é passado para a variável $n2
   $media = ( $n1 + $n2 ) /2;

   echo "<h2> Os parametros recebidos pela URL foram $n1 e $n2. </h2>"
   echo "<br/> O valor da media arimétrica entre $n1 e $n2 é igual a $media";


   //abrir no browser com a URL -> http//localhost/www/exemplo5.php?a=2&b=3
   ?>
</body>
</html>