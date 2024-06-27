<?php

$valores=array(10,30,80,100);
print_r($array);

foreach ($valores as $i) {
    $soma +=  $i;

}
print_r($soma);
$media=$soma/count($valores);
echo "media: $media";
?>