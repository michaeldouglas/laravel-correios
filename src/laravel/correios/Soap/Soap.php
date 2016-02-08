<?php

namespace laravel\correios\Soap;


/**
 * Classe responsável por prover o cliente para chamada das funções do correios
 *
 * @category   Soap
 * @package    Laravel\Correios
 *
 * @author     Michael Douglas <michaeldouglas010790@gmail.com>
 * @since      2016-02-08
 *
 * @copyright  Laravel\Correios
*/
class Soap
{
  public $client;
  protected $url = "http://ws.correios.com.br/calculador/CalcPrecoPrazo.asmx?WSDL";

  public function __construct()
  {
    $this->client = new \SoapClient($this->url, [
                      'trace'              => true,
                      'exceptions'         => true,
                      'compression'        => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_GZIP,
                      'connection_timeout' => 1000,
                ]);
  }
}
