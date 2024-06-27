<?php

$dados = array(
array("Nome"=>"João","idade"=>10),
array("Nome"=>"Pedro","idade"=>20),
array("Nome"=>"Maria","idade"=>50),
array("Nome"=>"Lucas","idade"=>3),
);
foreach($dados as $d){
    echo"\nNome: ".$d['nome']."Idade:".$d['idade'];
}


?>