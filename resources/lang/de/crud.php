<?php

return [
    'global'    =>  [
        'created_at'    =>  'Erstellt Am',
        'updated_at'    =>  'Aktualisiert Am',
        'next_step'     =>  'Nächster Schritt',
        'back'          =>  'Zurückgehen',
        'need_help'     =>  'Brauchen Sie Hilfe?'
    ],

    'company'   =>  [
        'singular'  =>  'Firma',
        'plural'    =>  'Firmen',
        'fields'    =>  [
            'name'      =>  'Name',
            'pattern'   =>  'Muster',
            'country'   =>  'Land',
            'state'     =>  'Bundesland',
            'city'      =>  'Stadt'
        ]
    ],

    'ingredient'    =>  [
        'singular'  =>  'Zutat',
        'plural'    =>  'Zutaten',
        'fields'    =>  [
            'name'                      =>  'Name',
            'name_placeholder'          =>  "Schreibe zwischen '( )', um eine Bemerkung hinzuzufügen",
            'manufacturer'              =>  'Hersteller',
            'price'                     =>  'Preis',
            'nutritional_information'   =>  'Nährwertangaben',
            'seccondary_ingredients'    =>  'Sekundäre Zutaten',
            'allergens'                 =>  'Allergene'
        ],
        'steps'     =>  [
            'info' => [
                'title'             => 'Information',
                'sub_title'         => 'Schritt 1: Grundlegende Informationen',
                'name'              => 'Zutatenname',
                'manufacturer'      => 'Hersteller',
                'supplier'          => 'Lieferant',

                'price'             => 'Preis pro Einheit',
                'price_info'        => 'Preis, der für jede Einheit dieses Zutaten gezahlt wird',

                'gross_weight'      => 'Bruttogewicht',
                'gross_weight_info' => 'Gewicht vor jeglicher Aussortierung oder Reinigung der Zutat',
                
                'net_weight'        => 'Nettogewicht',
                'net_weight_info'   => 'Gewicht der Zutat nach Aussortierung oder Reinigung',
                
                'loss'              => 'Verlust',
                'loss_info'         => 'Verlorenes Gewicht im Aussortierungs- oder Reinigungsprozess',

                'price_kilo'        => 'Preis pro Kg/L',
                'price_kilo_info'   => 'Preis, der für jedes Kg/L gezahlt wird',

                'correction_factor' => 'Korrekturfaktor',
                'correction_factor_info' => 'Zahl, die den Gewichtsverlust einer Zutat während der Zubereitung angibt',

                'revenue'           => 'Ertrag',
                'revenue_info'      => 'Prozentualer Anteil der nutzbaren Zutat',

                'package'           => 'Verpackung',
                'package_info'      => 'Art der Verpackung, in der die Zutat gekauft wird.'
            ],
            'nutritional' => [
                'title'             => 'Nährwert',
                'sub_title'         => 'Schritt 2: Nährwerttabelle',
                'modal_title'       => 'Nährstoff hinzufügen',
                'modal_nutrient'    => 'Nährstoff',
                'modal_value'       => 'Wert',
                'modal_close'       => 'Schließen',
                'modal_add'         => 'Hinzufügen',
                'portion'           => 'Portion',
                'portion_info'      => 'Maß (Portion)',
                'optional_nutrients'=> 'Optionale Nährstoffe'
            ],
            'storage'   =>  [
                'title'                 =>  'Lagerung',
                'sub_title'             =>  'Schritt 3: Lagerung',
                'closed_package_label'  =>  'Lagerung Geschlossenes Paket',
                'opened_package_label'  =>  'Lagerung Offenes Paket',
                'storage_place'         =>  'Lagerort',
                'storage_temperature'   =>  'Lagerungstemperatur',
                
                'dry_fresh'             =>  'Trocken und Frisch',
                'sheltered_the_sun'     =>  'Vor der Sonne Geschützt',
                'refrigerator'          =>  'Kühlschrank',
                'freezer'               =>  'Gefrierschrank',
                'custom'                =>  'Benutzerdefiniert'
            ],
            'allergens'     =>  [
                'title'                     =>  'Allergene',
                'sub_title'                 =>  'Schritt 4: Allergene',
                'allergens'                 =>  'Allergene',
                'contain'                   =>  'Enthält',
                'allergens_derivatives'     =>  'Enthält Derivate',
                'derivatives'               =>  'Derivate',
                'maycontain'                =>  'Kann enthalten',
                'ingredients'               =>  'Zutaten'
            ],
            'finish'        =>  [
                'title'                     =>  'Beenden',
                'sub_title'                 =>  'Schritt 5: Abschluss',
            ]
        ]
    ]
];