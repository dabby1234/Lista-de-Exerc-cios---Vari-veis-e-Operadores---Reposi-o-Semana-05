<?php
$dados = [
['salario' => 1000, 'filhos' => 2],
['salario' => 5000, 'filhos' => 3],
['salario' => 7000, 'filhos' => 4],
['salario' => 8000, 'filhos' => 5],
['salario' => 10000, 'filhos' => 6],
['salario' => 12000, 'filhos' => 7],
['salario' => 13000, 'filhos' => 8],
['salario' => 150000, 'filhos' => 10]
];
//funções

function estatistica ($dados){
    $somasalario=0;
    $somafilhos=0;
    $totalpessoas= count($dados);
    $maiorsalario =0;
    $salariosate8000=0;

 foreach($dados as $p){
    $salario = $p ['salario'];
    $filhos =$p['filhos'];

    $somasalario += $salario;
    $somafilhos += $filhos;

   if ($salario > $maiorsalario){
    $maiorsalario = $salario;   
}
if ($salario <= 8000){
    $salariosate8000++;
}
}

$mediasalario = $somasalario/$totalpessoas;
$mediafilhos = $somafilhos/$totalpessoas;

$porcentagemsalarios8000 = ($salariosate8000/$totalpessoas)*100;

echo "Media do salario da população:R$".number_format($mediasalario,2).
"\n";
echo"Maior salario:R$".number_format($maiorsalario,2)."\n";
echo"Media numero filhos:".$mediafilhos."\n";
echo"Porsentagem de pessoas com salario até R$8000:".number_format($porcentagemsalarios8000)."%";

}
//chamar função
estatistica($dados);
?>