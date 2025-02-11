<!DOCTYPE html>
<html lang="pt-pt">
    <head>
        <meta charset="UTF-8">
        <title> AULA  6- Array indexadp</title>
        <body>
            <?php 
            $cores[] ="Verde";
            $cores[] ="Azul";
            $cores[] ="Amarelo";
            echo "<h3> Constituiçao de array cores: </h3>";
            print_r($cores) 
            echo"<br>";
            $cores[1] = "laranja";
            $cores[] = "vermelho";
            echo"<h3> Constituiçao do array com cores: </h3>";
            print_r ($cores);
            echo "<h4>Na posição 1 está  a cor: " . $cores[1] . "</h4>";
            ?>
            </body>
            </html>