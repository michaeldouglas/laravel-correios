## Laravel cálculo de prazos

O laravel-correios consome os serviços do Correios e prove uma forma
simples de gerar os cálculos de prazo de entrega para a sua empresa, loja ou etc.

## Manual Integração dos Correios
[http://www.correios.com.br/para-voce/correios-de-a-a-z/pdf/calculador-remoto-de-precos-e-prazos/manual-de-implementacao-do-calculo-remoto-de-precos-e-prazos](http://www.correios.com.br/para-voce/correios-de-a-a-z/pdf/calculador-remoto-de-precos-e-prazos/manual-de-implementacao-do-calculo-remoto-de-precos-e-prazos)

## PHP compatibilidade

 PHP 5    | PHP 7
:---------|:----------
 5.4.x    | 7.0.x
 5.5.x    |
 5.6.x    |

 ## Laravel compatibilidade

 Laravel  | Traduzível | Traduzível
:---------|:---------- | :----------
 5.2.x    | 5.1.x      | 5.0.x

 ## Instalação

Abra o arquivo `composer.json` e insira a seguinte instrução:

    "require": {
        "michael/laravelcorreios": "dev-master"
    }

Após inserir no require o `Laravel Correios`, você deverá executar o comando:

    composer update


Ou execute o comando:

    composer require michael/laravelcorreios
