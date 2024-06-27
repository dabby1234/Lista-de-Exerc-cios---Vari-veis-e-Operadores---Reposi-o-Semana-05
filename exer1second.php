<?php
function triangulo($x,$y,$z){
    if(($x + $y > $z) && ($x + $z > $y) && ($z + $y > $x)) {
if($x==$y && $y == $z){
    echo "Equilatero";
}else if($x ==$y || $x == $z ||$y == $z){
echo"Isosceles";
}else{
    echo"Escaleno";
}
}else{
    echo"Não é Triangulo";
}
}


$x = 30;
$y = 10;
$z = 10;

triangulo($x,$y,$z);
?>