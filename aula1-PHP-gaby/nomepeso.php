<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="">
    <label>Informe seu nome: </label>
    <input type="text" name="nome"><br>
    Peso:<input type="text" name="Peso"><br>
    Altura:<input type="text" name="Altura"><br>
    imc:<input type="text" name="imc"><br>
    resultado:<input type="text" name="resultado"><br>
    <input type="submit" value="vereficar">
    


</form>

</body>
</html>

<?php 
$nome = $_GET['nome'];
$peso = 67;
$Altura = 1.67;
$imc = $peso / ($altura ** 2);   
$resultado = "O resultado do seu IMC é $imc, isso quer dizer que você está";

 if($imc <18.5){
    echo "{$resultado} e {$imc}Você é magro";
}else if($imc <= 25 && $imc >= 18.5) {
    echo "{$resultado} e {$imc} Peso normal";
}else if($imc <= 30 && $imc >= 25) {
    echo "{$resultado}e {$imc} Sobrepeso!";
}else if($imc <= 35 && $imc >= 30) {
    echo "{$resultado} e {$imc} Obesidade Grau 1!";
}else if($imc <= 40 && $imc >= 35 ) {
    echo "{$resultado} e {$imc} Obesidade Grau 2!";
} else if($imc >=40) {
    echo "{$resultado} e {$imc} Obesidade Grau 3!";
}


?>