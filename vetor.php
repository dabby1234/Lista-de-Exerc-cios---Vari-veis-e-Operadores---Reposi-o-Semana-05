<?php
//vetor or array indexado

//declaração
$numeros = array(10,20,30,40,"Maria",10.5);

echo"{}".$numeros[4];





foreach($numeros as $n){
    echo"\n $n";
}

for($i = 0; $i < count($numeros);$i++){
    echo "\n $numeros[$i]";
}

?>