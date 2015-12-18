<?php

return [
    /* DEFINE SE SERÁ UTILIZADO O AMBIENTE DE TESTES */
    'use-sandbox' => false,

    /*
     * Coloque abaixo as informações do seu cadastro no PagSeguro
     */
    'credentials' => [//SETA AS CREDENCIAIS DE SUA LOJA
        'email' => null,
        'token' => null,
    ],

    /*
     * Informe abaixo o nome / url das rotas de aplicação para notificações
     * e redirecionamento após pagamento
     * Parâmetro: "route-name" para nome de rota laravel ou "fixed" para url fixa (URL completa)
     * Ex. 01: "route-name" => "tela-de-obrigado" (Nome de Rota)
     * Ex. 02: "fixed" => "http://minhaloja.com.br/pagamento/tela-de-obrigado" (URL Fixa)
     *
     * PARA MAIS INFORMAÇÕES VIDE:
     * https://sandbox.pagseguro.uol.com.br/vendedor/configuracoes.html
     */
    'routes' => [
        'redirect' => [
            'route-name' => 'pagseguro.redirect',
            /*
             * Nome do parâmetro opctional para ID da Transação
             * CASO VÁ USAR, CONFIGURAR O NOME NA SUA CONTA NO PAGSEGURO
             */
            'transaction_id_parameter_name' => null
        ],
        'notification' => [
            'route-name' => 'pagseguro.notification',
        ],
    ],

    /*
     * MOEDA QUE SERÁ UTILIZADA COMO MEIO DE PAGAMENTO
     * Somente BRL é aceito no momento (Real do Brasil)
     * */
    'currency' => [
        'type' => 'BRL'
    ],

    /**
     * Adaptador de Requisições
     */
    'http' => [
        'adapter' => [
            'type' => 'curl',
            'options' => [
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_0
            ]
        ],
    ],

    /*
     * ATENÇÃO: Não altere as configurações abaixo
     * */
    'host' => [
        'production' => 'https://ws.pagseguro.uol.com.br',
        'sandbox' => 'https://ws.sandbox.pagseguro.uol.com.br'
    ],
    'url' => [
        'checkout' => '/v2/checkout',
        'notifications' => '/v3/transactions/notifications',
        'transactions' => '/v3/transactions',
        'transactions-history' => '/v2/transactions',
        'transactions-abandoned' => '/v2/transactions/abandoned',
    ],
];
