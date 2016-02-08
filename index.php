<?php
# http://ws.correios.com.br/calculador/CalcPrecoPrazo.asmx
$url = 'http://ws.correios.com.br/calculador/CalcPrecoPrazo.asmx?WSDL';
$client = new SoapClient($url, [
                'trace'              => true,
                'exceptions'         => true,
                'compression'        => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_GZIP,
                'connection_timeout' => 1000,
            ]);

$args = new stdClass();

$args->nCdServico = "40010";
$args->sCepOrigem = "04433070";
$args->sCepDestino = "07936060";

echo "<pre>";
print_r($client->CalcPrazo($args));
