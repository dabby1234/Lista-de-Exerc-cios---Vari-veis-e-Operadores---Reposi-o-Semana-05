<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas</title>
</head>
<body>
<form action="">
    <label>Informe seu nome: </label>
    <input type="text" name="nome"><br>
    nota1:<input type="text" name="nota1"><br>
    nota2:<input type="text" name="nota2"><br>
    nota3:<input type="text" name="nota3"><br>
    <input type="submit" value="vereficar">

</form>
    
</body>
</html>

<?php
function soma($nota1,$nota2,$nota3){
    $media = $nota1 + $nota2 + $nota3/3;
    echo"\nsoma:{$media}";
    return $media;
}

function situacao($media){
    if($media>= 7){
        echo "A média é{$media}.Situação:De buenas";
    
    }else if($media>=4 && $media <7){
        echo"A média é{$media}.Situação try Again";
    }else{

        echo"media é:{$media} Aluno Reprovado";
    }
}

$nota1 = $_GET['nota1'];
$nota2 = $_GET['nota2'];
$nota3 = $_GET['nota3'];

$media = soma(1,1,1);
situacao($media);




?>





