<?php

require_once __DIR__ . '/../../vendor/autoload.php';

ini_set('display_errors', 'On');
error_reporting(E_ALL);

use laravel\correios\Calculo\Calculo;

$dados = [
  "prazo" => [
    "tipoServico" => 40010,
    "cepOrigem"   => 04433070,
    "cepDestino"  => 07936060,
  ]
];

$client = new Calculo($dados);
