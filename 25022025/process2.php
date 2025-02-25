<?php
//variaveis que recebem os dados
$title=$_POST['title'];
$pweb=$_POST['pweb'];
$data=$_POST['data'];

echo "<h3>Dados recebidos</h3>";
echo "Título do Livro:$title <br>";
echo "Endereço Web: $pweb <br>";
echo "Data de enio: $data <br>";
echo "Data actual:".date("d-m-y");
?>