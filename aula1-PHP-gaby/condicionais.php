<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="">
    Idade:<input type="text" name="idade"><br>
    <input type="submit" value="verificar"><br>
    <label>Informe seu nome: </label>
    <input type="text" name="nome"><br>

</form>

</body>
</html>

<?php
$idade = $_GET['idade'];
//echo "{$numero}";
$nome = $_GET['nome'];
//echo "{$nome}";
echo"{idade}";
echo"{nome}";


if($idade  >= 18){
    echo " O nome é {$nome} e {$idade} é maior de idade";
}else{
    echo " O nome é {$nome} e {$idade} é menor de idade";
}

?>

