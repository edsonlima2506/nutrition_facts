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
            'info' => [
                'title'             => 'Informazioni',
                'sub_title'         => 'Fase 1: Informazioni di Base',
                'name'              => 'Nome dell\'Ingrediente',
                'manufacturer'      => 'Produttore',
                'supplier'          => 'Fornitore',

                'price'             => 'Prezzo per Unità',
                'price_info'        => 'Prezzo pagato per ogni unità di questo ingrediente',

                'gross_weight'      => 'Peso Lordo',
                'gross_weight_info' => 'Peso prima di qualsiasi scarto o pulizia dell\'ingrediente',
                
                'net_weight'        => 'Peso Netto',
                'net_weight_info'   => 'Peso dell\'ingrediente dopo lo scarto o la pulizia',
                
                'loss'              => 'Perdita',
                'loss_info'         => 'Peso perso durante il processo di scarto o pulizia',

                'price_kilo'        => 'Prezzo per Kg/L',
                'price_kilo_info'   => 'Prezzo pagato per ogni Kg/L',

                'correction_factor' => 'Fattore di Correzione',
                'correction_factor_info' => 'Numero che indica la perdita di peso che un alimento subisce durante la preparazione',

                'revenue'           => 'Rendimento',
                'revenue_info'      => 'Percentuale utilizzata dell\'ingrediente',

                'package'           => 'Imballaggio',
                'package_info'      => 'Tipo di imballaggio con cui l\'ingrediente è acquistato.'
            ],
            'nutritional' => [
                'title'             => 'Nutrizionale',
                'sub_title'         => 'Fase 2: Tabella Nutrizionale',
                'modal_title'       => 'Aggiungi Nutriente',
                'modal_nutrient'    => 'Nutriente',
                'modal_value'       => 'Valore',
                'modal_close'       => 'Chiudere',
                'modal_add'         => 'Aggiungere',
                'portion'           => 'Porzione',
                'portion_info'      => 'Misura (porzione)',
                'optional_nutrients'=> 'Nutrienti Opzionali'
            ],
            'storage'   =>  [
                'title'                 =>  'Conservazione',
                'sub_title'             =>  'Fase 3: Conservazione',
                'closed_package_label'  =>  'Conservazione Confezione Chiusa',
                'opened_package_label'  =>  'Conservazione Confezione Aperta',
                'storage_place'         =>  'Luogo di Conservazione',
                'storage_temperature'   =>  'Temperatura di Conservazione',
                
                'dry_fresh'             =>  'Secco e Fresco',
                'sheltered_the_sun'     =>  'Al riparo dal Sole',
                'refrigerator'          =>  'Frigorifero',
                'freezer'               =>  'Congelatore',
                'custom'                =>  'Personalizzato'
            ],
            'allergens'     =>  [
                'title'                     =>  'Allergeni',
                'sub_title'                 =>  'Fase 4: Allergeni',
                'allergens'                 =>  'Allergeni',
                'contain'                   =>  'Contiene',
                'allergens_derivatives'     =>  'Contiene Derivati',
                'derivatives'               =>  'Derivati',
                'maycontain'                =>  'Può Contenere',
                'ingredients'               =>  'Ingredienti'
            ],
            'finish'        =>  [
                'title'                     =>  'Fine',
                'sub_title'                 =>  'Fase 5: Finalizzazione',
            ]
        ]
    ]
];