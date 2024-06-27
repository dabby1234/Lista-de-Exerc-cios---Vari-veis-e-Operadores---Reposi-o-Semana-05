<?php 
//definição da função
function soma($n1,$n2){
    $res = $n1 +$n2;
    echo "\nSoma pague o boletão:{$res}";
}
//chamada da função/invocação
function sub($num1, $num2){
    $res=$num1-$num2;
    return $res;
}
function calcular ($n1,$n2){
    soma($n1,$n2);
$resSub = sub($n1,$n2);
echo "\nSubtracao:{$resSub}";
}



//soma da função/invocação
soma(1,1);
soma(5,20);
$retornofunção = sub(5,2);

echo"\nretorno: {retornofunçao}";
calcular(10,4);
?>