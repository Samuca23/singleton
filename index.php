<?php
require_once("./vendor/autoload.php");

use Singleton\LogsSingleton;

$instancia = LogsSingleton::obterInstancia();
$novaInstancia = LogsSingleton::obterInstancia();

if ($instancia === $novaInstancia) {
    echo 'As instâncias são exatamentes as mesmas';
}

