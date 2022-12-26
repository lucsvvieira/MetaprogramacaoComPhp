<?php

use Alura\Reflection\ClasseExemplo;

require_once __DIR__ . '/vendor/autoload.php';

$reflectionClass = new ReflectionClass(ClasseExemplo::class);

var_dump($reflectionClass->getProperties());

// ----- Métodos ---------
/*
 $reflectionMethod = $reflectionClass->getMethod('metodoPublico');
 $parameters = array_filter(
    $reflectionMethod->getParameters(),
    fn (ReflectionParameter $parameter) => !$parameter->isOptional()
);

foreach ($parameters as $parameter) {
    if (!$parameter->hasType()) {
        throw new DomainException('Erro');
    }

    $tipo = (string) $parameter->getType();
    var_dump($tipo, $parameter->getType()->isBuiltin());
}

$objetoClasseExemplo = $reflectionClass->newInstanceWithoutConstructor();

// $reflectionMethod->invokeArgs($objetoClasseExemplo, ['Mensagem qualquer ', 7]);
*/
