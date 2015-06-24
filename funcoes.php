<?php

//function somar($x, $y)
//{
//    return $x + $y;
//}
//$valor = somar(10,20);
//echo $valor;
$nome = "Wesley";

$exibe =  function ($x) use ($nome) {
    //echo $x." - ".$nome."<br>";
};

$array = [1, 2, 3, 5, 6, 8, 90];

array_walk($array, $exibe);


$dados_url  = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
$rota = explode('/',$dados_url['path'],2);
print_r($rota);

