<!DOCTYPE html>
<html lang="pt-pt">
<head>

<meta charset="UTF-8">
<title> Aula 6 - Array associativo </title>
<body>
    <?php
$idades= array( "Pedro"=>20 , "Beatriz"=> 17, "Joana">19);
echo" O array idades é composto por : ";
print_r($idades); 
echo"<br><br>";
echo "A joana tem " . "<b>" . $idades ['Joana'] . "</b>" . "anos.";
echo"<br>";
$idades ['Beatriz']=18; 
echo"<br>";
echo "A beatriz tem agora " . "<b>" . $idades['Beatriz'] . "</b>" . " anos.";
echo"<hr>";
var_dump($dump)
?>
</html>