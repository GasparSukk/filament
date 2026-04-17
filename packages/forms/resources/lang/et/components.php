<?php

return [

    'builder' => [

        'actions' => [

            'clone' => [
                'label' => 'Kopeeri',
            ],

            'add' => [

                'label' => 'Lisa :label',

                'modal' => [

                    'heading' => 'Lisa :label',

                    'actions' => [

                        'add' => [
                            'label' => 'Lisa',
                        ],

                    ],

                ],

            ],

            'add_between' => [

                'label' => 'Lisa plokkide vahele',

                'modal' => [

                    'heading' => 'Lisa :label',

                    'actions' => [

                        'add' => [
                            'label' => 'Lisa',
                        ],

                    ],

                ],

            ],

            'delete' => [
                'label' => 'Kustuta',
            ],

            'edit' => [

                'label' => 'Muuda',

                'modal' => [

                    'heading' => 'Muuda plokki',

                    'actions' => [

                        'save' => [
                            'label' => 'Salvesta muudatused',
                        ],

                    ],

                ],

            ],

            'reorder' => [
                'label' => 'Liiguta',
            ],

            'move_down' => [
                'label' => 'Liiguta alla',
            ],

            'move_up' => [
                'label' => 'Liiguta üles',
            ],

            'collapse' => [
                'label' => 'Sulge',
            ],

            'expand' => [
                'label' => 'Ava',
            ],

            'collapse_all' => [
                'label' => 'Sulge kõik',
            ],

            'expand_all' => [
                'label' => 'Ava kõik',
            ],

        ],

    ],

    'checkbox_list' => [

        'actions' => [

            'deselect_all' => [
                'label' => 'Tühista kõik',
            ],

            'select_all' => [
                'label' => 'Vali kõik',
            ],

        ],

    ],

    'file_upload' => [

        'editor' => [

            'actions' => [

                'cancel' => [
                    'label' => 'Tühista',
                ],

                'drag_crop' => [
                    'label' => 'Lohistamise režiim "lõika"',
                ],

                'drag_move' => [
                    'label' => 'Lohistamise režiim "liiguta"',
                ],

                'flip_horizontal' => [
                    'label' => 'Pööra pilt horisontaalselt',
                ],

                'flip_vertical' => [
                    'label' => 'Pööra pilt vertikaalselt',
                ],

                'move_down' => [
                    'label' => 'Liiguta pilt alla',
                ],

                'move_left' => [
                    'label' => 'Liiguta pilt vasakule',
                ],

                'move_right' => [
                    'label' => 'Liiguta pilt paremale',
                ],

                'move_up' => [
                    'label' => 'Liiguta pilt üles',
                ],

                'reset' => [
                    'label' => 'Lähtesta',
                ],

                'rotate_left' => [
                    'label' => 'Pööra pilt vasakule',
                ],

                'rotate_right' => [
                    'label' => 'Pööra pilt paremale',
                ],

                'set_aspect_ratio' => [
                    'label' => 'Seadista kuvasuhe :ratio',
                ],

                'save' => [
                    'label' => 'Salvesta',
                ],

                'zoom_100' => [
                    'label' => 'Suurenda pilti 100%',
                ],

                'zoom_in' => [
                    'label' => 'Suurenda',
                ],

                'zoom_out' => [
                    'label' => 'Vähenda',
                ],

            ],

            'fields' => [

                'height' => [
                    'label' => 'Kõrgus',
                    'unit' => 'px',
                ],

                'rotation' => [
                    'label' => 'Pööramine',
                    'unit' => 'kraad',
                ],

                'width' => [
                    'label' => 'Laius',
                    'unit' => 'px',
                ],

                'x_position' => [
                    'label' => 'X',
                    'unit' => 'px',
                ],

                'y_position' => [
                    'label' => 'Y',
                    'unit' => 'px',
                ],

            ],

            'aspect_ratios' => [

                'label' => 'Kuvasuhted',

                'no_fixed' => [
                    'label' => 'Vaba',
                ],

            ],

            'svg' => [

                'messages' => [
                    'confirmation' => 'SVG failide muutmine ei ole soovitatav, kuna see võib kvaliteeti halvendada.\n Kas oled kindel, et soovid jätkata?',
                    'disabled' => 'SVG failide muutmine on keelatud, kuna see võib kvaliteeti halvendada.',
                ],

            ],

        ],

    ],

    'key_value' => [

        'actions' => [

            'add' => [
                'label' => 'Lisa rida',
            ],

            'delete' => [
                'label' => 'Kustuta rida',
            ],

            'reorder' => [
                'label' => 'Korrasta rida',
            ],

        ],

        'fields' => [

            'key' => [
                'label' => 'Tunnus',
            ],

            'value' => [
                'label' => 'Väärtus',
            ],

        ],

    ],

    'markdown_editor' => [

        'tools' => [
            'attach_files' => 'Lisa faile',
            'blockquote' => 'Tsitaat',
            'bold' => 'Rasvane',
            'bullet_list' => 'Punktidega loetelu',
            'code_block' => 'Koodiblokk',
            'heading' => 'Pealkiri',
            'italic' => 'Kaldkiri',
            'link' => 'Link',
            'ordered_list' => 'Nummerdatud loetelu',
            'redo' => 'Tee uuesti',
            'strike' => 'Läbikriipsutatud',
            'table' => 'Tabel',
            'undo' => 'Võta tagasi',
        ],

    ],

    'modal_table_select' => [

        'actions' => [

            'select' => [

                'label' => 'Vali',

                'actions' => [

                    'select' => [
                        'label' => 'Vali',
                    ],

                ],

            ],

        ],

    ],

    'radio' => [

        'boolean' => [
            'true' => 'Jah',
            'false' => 'Ei',
        ],

    ],

    'repeater' => [

        'actions' => [

            'add' => [
                'label' => 'Lisa :label',
            ],

            'add_between' => [
                'label' => 'Lisa vahele',
            ],

            'delete' => [
                'label' => 'Kustuta',
            ],

            'clone' => [
                'label' => 'Kopeeri',
            ],

            'reorder' => [
                'label' => 'Liiguta',
            ],

            'move_down' => [
                'label' => 'Liiguta alla',
            ],

            'move_up' => [
                'label' => 'Liiguta üles',
            ],

            'collapse' => [
                'label' => 'Sulge',
            ],

            'expand' => [
                'label' => 'Ava',
            ],

            'collapse_all' => [
                'label' => 'Sulge kõik',
            ],

            'expand_all' => [
                'label' => 'Ava kõik',
            ],

        ],

    ],

    'rich_editor' => [

        'actions' => [

            'attach_files' => [

                'label' => 'Laadi üles fail',

                'modal' => [

                    'heading' => 'Laadi üles fail',

                    'form' => [

                        'file' => [

                            'label' => [
                                'new' => 'Fail',
                                'existing' => 'Asenda fail',
                            ],

                        ],

                        'alt' => [

                            'label' => [
                                'new' => 'Alternatiivtekst',
                                'existing' => 'Muuda alternatiivteksti',
                            ],

                        ],

                    ],

                ],

            ],

            'custom_block' => [

                'modal' => [

                    'actions' => [

                        'insert' => [
                            'label' => 'Sisesta',
                        ],

                        'save' => [
                            'label' => 'Salvesta',
                        ],

                    ],

                ],

            ],

            'link' => [

                'label' => 'Muuda',

                'modal' => [

                    'heading' => 'Link',

                    'form' => [

                        'url' => [
                            'label' => 'URL',
                        ],

                        'should_open_in_new_tab' => [
                            'label' => 'Ava uues vahekaardis',
                        ],

                    ],

                ],

            ],

        ],

        'no_merge_tag_search_results_message' => 'Ei leitud ühtegi asendustagi.',

        'tools' => [
            'align_center' => 'Joonda keskele',
            'align_end' => 'Joonda lõppu',
            'align_justify' => 'Joonda võrdselt',
            'align_start' => 'Joonda algusesse',
            'attach_files' => 'Lisa faile',
            'blockquote' => 'Tsitaat',
            'bold' => 'Rasvane',
            'bullet_list' => 'Punktidega loetelu',
            'clear_formatting' => 'Eemalda vormindus',
            'code' => 'Kood',
            'code_block' => 'Koodiblokk',
            'custom_blocks' => 'Plokid',
            'details' => 'Üksikasjad',
            'h1' => 'Pealkiri 1',
            'h2' => 'Pealkiri 2',
            'h3' => 'Pealkiri 3',
            'highlight' => 'Tõsta esile',
            'horizontal_rule' => 'Horisonitaalne joon',
            'italic' => 'Kaldkiri',
            'lead' => 'Peamine tekst',
            'link' => 'Link',
            'merge_tags' => 'Asendustagid',
            'ordered_list' => 'Nummerdatud loetelu',
            'redo' => 'Tee uuesti',
            'small' => 'Väike tekst',
            'strike' => 'Läbikriipsutatud',
            'subscript' => 'Allindeks',
            'superscript' => 'Ülaindeks',
            'table' => 'Tabel',
            'table_delete' => 'Kustuta tabel',
            'table_add_column_before' => 'Lisa veerg enne',
            'table_add_column_after' => 'Lisa veerg pärast',
            'table_delete_column' => 'Kustuta veerg',
            'table_add_row_before' => 'Lisa rida üles',
            'table_add_row_after' => 'Lisa rida alla',
            'table_delete_row' => 'Kustuta rida',
            'table_merge_cells' => 'Ühenda pesad',
            'table_split_cell' => 'Jaga pesa',
            'table_toggle_header_row' => 'Lülita päiserida',
            'underline' => 'Allajoonitud',
            'undo' => 'Võta tagasi',
        ],

    ],

    'select' => [

        'actions' => [

            'create_option' => [

                'label' => 'Loo',

                'modal' => [

                    'heading' => 'Loo',

                    'actions' => [

                        'create' => [
                            'label' => 'Loo',
                        ],

                        'create_another' => [
                            'label' => 'Loo & loo järgmine',
                        ],

                    ],

                ],

            ],

            'edit_option' => [

                'label' => 'Muuda',

                'modal' => [

                    'heading' => 'Muuda',

                    'actions' => [

                        'save' => [
                            'label' => 'Salvesta',
                        ],

                    ],

                ],

            ],

        ],

        'boolean' => [
            'true' => 'Jah',
            'false' => 'Ei',
        ],

        'loading_message' => 'Laadimine...',

        'max_items_message' => 'Ainult :count saab valida.',

        'no_search_results_message' => 'Ei leitud ühtegi otsingule vastavat kirjet.',

        'placeholder' => 'Vali',

        'searching_message' => 'Otsimine...',

        'search_prompt' => 'Otsimiseks alusta kirjutamist...',

    ],

    'tags_input' => [
        'placeholder' => 'Uus silt',
    ],

    'text_input' => [

        'actions' => [

            'copy' => [
                'label' => 'Kopeeri',
                'message' => 'Kopeeritud',
            ],

            'hide_password' => [
                'label' => 'Peida parool',
            ],

            'show_password' => [
                'label' => 'Näita parooli',
            ],

        ],

    ],

    'toggle_buttons' => [

        'boolean' => [
            'true' => 'Jah',
            'false' => 'Ei',
        ],

    ],

];
