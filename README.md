## Laravel Correios cálculo de prazos

[![Build Status](https://travis-ci.org/michaeldouglas/laravel-correios.svg?branch=master)](https://travis-ci.org/michaeldouglas/laravel-correios)
[![Total Downloads](https://poser.pugx.org/michael/laravel-correios/downloads)](https://poser.pugx.org/michael/laravel-correios/downloads)
[![Latest Unstable Version](https://poser.pugx.org/leaphly/cart-bundle/v/unstable.svg)](//packagist.org/packages/michael/laravel-correios)
[![License](https://poser.pugx.org/leaphly/cart-bundle/license.svg)](https://packagist.org/packages/michael/laravel-correios)
[![Code Climate](https://codeclimate.com/github/michaeldouglas/laravel-correios/badges/gpa.svg)](https://codeclimate.com/github/michaeldouglas/laravel-correios)
[![Codacy Badge](https://api.codacy.com/project/badge/grade/0d80d5d5af844ee58cf5fa4c2a813c63)](https://www.codacy.com/app/michaeldouglas010790/laravel-correios)

O Laravel Correios consome os serviços do Correios e prove uma forma
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
        "michael/laravel-correios": "dev-master"
    }

Após inserir no require o `Laravel Correios`, você deverá executar o comando:

    composer update

Ou execute o comando:

    composer require michael/laravel-correios
