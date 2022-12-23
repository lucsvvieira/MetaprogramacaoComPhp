<?php

use Alura\Reflection\ClasseExemplo;

require_once __DIR__ . '/vendor/autoload.php';

$reflectionClass = new ReflectionClass(ClasseExemplo::class);

$reflectionMethod = $reflectionClass->getMethod('metodoPublico');

$objetoClasseExemplo = $reflectionClass->newInstanceWithoutConstructor();

$reflectionMethod->invokeArgs($objetoClasseExemplo, ['Mensagem qualquer ', 7]);

