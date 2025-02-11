<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AULA 4 - tabuada</title>
    <style>
        fieldset {
            border: 5px ridge #009;
            background: #ecf0f1;
            width: 200px;
        }
        
legend {
    color: #FFF;
    background: #7f8c8d;
    font-size: 1.5em;
    padding: 5px;

}
</style>
</head>
<body>
    <form method="GET" action="aula4_tabuada.php">
        <fieldset>
            <legend><b>TABUADA></b></legend>
            <input type="radio" name="numero" value="1" checked/>
            <label for="1">1</label>
            <input  type="radio" name="numero" value="2"/>
            <label for="2">2</label>
            <input type="radio" name="numero" value="3" checked/>
            <label for="3">3</label>
            <input  type="radio" name="numero" value="4"/>
            <label for="4">4</label>
            <input  type="radio" name="numero" value="5"/>
            <label for="5">5</label>
</fieldset><br>
<input type="submit" value="calcular">
</form>
<body>
</html>