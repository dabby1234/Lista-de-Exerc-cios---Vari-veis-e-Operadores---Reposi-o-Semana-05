<?php 
$senha = $_POST['senha'];
$login = $_POST['login'];


//echo "{$senha}";//debugar
//echo"{$login}";

while(($senha != 123) && ($login !='codepeia')){
    header('location:login.php');
}

echo "Bem vindo ao grupin do zap"

?>