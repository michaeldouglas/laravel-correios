<?php

namespace laravel\correios\Calculo;

class Calculo
{
  private $dados;

  public function __construct(array $dados)
  {
      $this->dados = $dados;
      echo "<pre>";
      print_r($this->dados);
  }
}
