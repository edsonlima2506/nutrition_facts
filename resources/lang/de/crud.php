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
            'info'          =>  [
                'title'         =>  'Informationen',
                'sub_title'     =>  'Schritt 1: Basisinformationen',
                'name'          =>  'Zutat Name',
                'manufacturer'  =>  'Hersteller',
                'price'         =>  'Preis',
            ],
            'nutritional'   =>  [
                'title'         =>  'Nährwert',
                'sub_title'     =>  'Schritt 2: Nährwerttabelle',
                'modal_title'   =>  'Nährstoff hinzufügen',
                'modal_nutrient'   =>  'Nährstoff',
                'modal_close'   =>  'Schließen',
                'modal_add'     =>  'Hinzufügen'
            ],
            'ingredients'   =>  [
                'title'         =>  'Zutaten',
                'sub_title'     =>  'Schritt 3: Zutaten',
                'ingredients'   =>  'Zutaten',
            ],
            'allergens'     =>  [
                'title'                     =>  'Allergene',
                'sub_title'                 =>  'Schritt 4: Allergene',
                'allergens'                 =>  'Allergene',
                'contain'                   =>  'Enthält',
                'allergens_derivatives'     =>  'Enthält Derivate',
                'derivatives'               =>  'Derivate',
                'maycontain'                =>  'Kann enthalten'
            ],
            'save'          =>  'Speichern'
        ]
    ]
];