<?php

return [

    'label' => 'Ekspordi :label',

    'modal' => [

        'heading' => 'Ekspordi :label',

        'form' => [

            'columns' => [

                'label' => 'Veerud',

                'form' => [

                    'is_enabled' => [
                        'label' => ':column lubatud',
                    ],

                    'label' => [
                        'label' => ':column silt',
                    ],

                ],

            ],

        ],

        'actions' => [

            'export' => [
                'label' => 'Ekspordi',
            ],

        ],

    ],

    'notifications' => [

        'completed' => [

            'title' => 'Eksporditud',

            'actions' => [

                'download_csv' => [
                    'label' => 'Laadi alla .csv',
                ],

                'download_xlsx' => [
                    'label' => 'Laadi alla .xlsx',
                ],

            ],

        ],

        'max_rows' => [
            'title' => 'Eksporditav info on liiga mahukas',
            'body' => 'Korraga ei saa eksportida rohkem kui 1 rida.|Korraga ei saa eksportida rohkem kui :count rida.',
        ],

        'started' => [
            'title' => 'Eksportimine alustatud',
            'body' => 'Eksport on alanud ja 1 rida töödeldakse taustal. Saate teate allalaadimise lingiga, kui see on valmis.|Eksport on alanud ja :count rida töödeldakse taustal. Saate teate allalaadimise lingiga, kui see on valmis.',
        ],

    ],

    'file_name' => 'eksport-:export_id-:model',

];
