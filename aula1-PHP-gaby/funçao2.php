<?php 
function calcularImc($peso, $altura){
    $imc = $peso/(pow($altura,2));
    return $imc;
}
function situacao($imc){
    if($imc< 16){
        echo "O imc é:{$imc}.Situação:Baixo peso";
        
            }else if($imc >=16 && $imc <= 25){
                echo "Saudável";
            }else if($imc > 25 && $imc< 29){
                echo "Sobrepeso";
            }else{
                echo "Obeso";
            }
}
//PEGANDO AS INFORMAÇOES DO FORMULARIO
$peso = $_GET['peso'];
$Altura =$_GET['altura'];





//debugar
$imc = calcularImc(44,1.67);
situacao($imc);



?>