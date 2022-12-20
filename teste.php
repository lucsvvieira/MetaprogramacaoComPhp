<?php

use Alura\Reflection\ClasseExemplo;

require_once __DIR__ . 'vendor\autoload.php';

echo __LINE__ . PHP_EOL;

$idade = 28;

$variavel  = 'idade';

echo $$variavel;

$nomeCompletoClasse = 'Alura\Reflection\ClasseExemplo';
$nomeMetodo = 'metodoPublico';

$objeto = new $nomeCompletoClasse();

if (method_exists($nomeCompletoClasse, $nomeMetodo)) {
    echo PHP_EOL;
    $objeto->$nomeMetodo();
    echo PHP_EOL;
}

var_dump($objeto);

var_dump(get_object_vars($objeto));