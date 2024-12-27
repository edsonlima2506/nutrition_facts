<?php

return [
    'global'    =>  [
        'created_at'    =>  'Creato Il',
        'updated_at'    =>  'Aggiornato Il',
        'next_step'     =>  'Passaggio Successivo',
        'back'          =>  'Tornare Indietro',
        'need_help'     =>  'Hai bisogno di aiuto?'
    ],

    'company'   =>  [
        'singular'  =>  'Azienda',
        'plural'    =>  'Aziende',
        'fields'    =>  [
            'name'      =>  'Nome',
            'pattern'   =>  'Modello',
            'country'   =>  'Paese',
            'state'     =>  'Stato',
            'city'      =>  'Città'
        ]
    ],

    'ingredient'    =>  [
        'singular'  =>  'Ingrediente',
        'plural'    =>  'Ingredienti',
        'fields'    =>  [
            'name'                      =>  'Nome',
            'name_placeholder'          =>  "Scrivi tra '( )' per aggiungere una nota",
            'manufacturer'              =>  'Produttore',
            'price'                     =>  'Prezzo',
            'nutritional_information'   =>  'Informazioni Nutrizionali',
            'seccondary_ingredients'    =>  'Ingredienti Secondari',
            'allergens'                 =>  'Allergeni'
        ],
        'steps'     =>  [
            'info'          =>  [
                'title'         =>  'Informazioni',
                'sub_title'     =>  'Fase 1: Informazioni di Base',
                'name'          =>  'Nome dell\'Ingrediente',
                'manufacturer'  =>  'Produttore',
                'price'         =>  'Prezzo',
            ],
            'nutritional'   =>  [
                'title'         =>  'Nutrizionale',
                'sub_title'     =>  'Fase 2: Tabella Nutrizionale',
                'modal_title'   =>  'Aggiungi Nutriente',
                'modal_nutrient'   =>  'Nutriente',
                'modal_close'   =>  'Chiudi',
                'modal_add'     =>  'Aggiungi'
            ],
            'ingredients'   =>  [
                'title'         =>  'Ingredienti',
                'sub_title'     =>  'Fase 3: Ingredienti',
                'ingredients'   =>  'Ingredienti',
            ],
            'allergens'     =>  [
                'title'                     =>  'Allergeni',
                'sub_title'                 =>  'Fase 4: Allergeni',
                'allergens'                 =>  'Allergeni',
                'contain'                   =>  'Contiene',
                'allergens_derivatives'     =>  'Contiene Derivati',
                'derivatives'               =>  'Derivati',
                'maycontain'                =>  'Può Contenere'
            ],
            'save'          =>  'Salva'
        ]
    ]
];