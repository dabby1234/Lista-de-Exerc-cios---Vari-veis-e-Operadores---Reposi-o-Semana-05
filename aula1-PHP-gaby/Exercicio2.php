<?php
//condicionais encadiadas 
$idade = 19;

if(($idade>= 16 && $idade < 18)|| $idade>=70){
    echo "O voto é facultativo rapah";

}else if($idade>=18 && $idade <70){
    echo "Voto obrigatório ";
}else{ 
    echo "Não vota";
}

?>