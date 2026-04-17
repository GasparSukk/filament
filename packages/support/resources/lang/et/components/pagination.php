<?php

return [

    'label' => 'Lehe navigeerimine',

    'overview' => '{1} Kuvatakse 1 tulemus|[2,*] Kuvatakse :first kuni :last :total tulemusest',

    'fields' => [

        'records_per_page' => [

            'label' => 'Lehe kohta',

            'options' => [
                'all' => 'Kõik',
            ],

        ],

    ],

    'actions' => [

        'first' => [
            'label' => 'Esimene',
        ],

        'go_to_page' => [
            'label' => 'Mine lehele :page',
        ],

        'last' => [
            'label' => 'Viimane',
        ],

        'next' => [
            'label' => 'Järgmine',
        ],

        'previous' => [
            'label' => 'Eelmine',
        ],

    ],

];
