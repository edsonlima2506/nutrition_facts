<?php

return [
    'global'    =>  [
        'created_at'    =>  'Erstellt Am',
        'updated_at'    =>  'Aktualisiert Am',
        'next_step'     =>  'Nächster Schritt',
        'back'          =>  'Zurückgehen',
        'need_help'     =>  'Brauchen Sie Hilfe?',
        'tutorial'      =>  'Anleitung'
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
            'supplier'                  =>  'Lieferant',
            'price'                     =>  'Preis',
            'nutritional_information'   =>  'Nährwertangaben',
            'seccondary_ingredients'    =>  'Sekundäre Zutaten',
            'allergens'                 =>  'Allergene',
            'closed_package'            =>  'Geschlossenes Paket',
            'opened_package'            =>  'Geöffnetes Paket'
        ],
        'filters'   =>  [
            'id'            =>  'ID',
            'name'          =>  'Name',
            'manufacturer'  =>  'Hersteller',
            'supplier'      =>  'Lieferant'
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
                'package_info'      => 'Art der Verpackung, in der die Zutat gekauft wird.',

                'table'             => 'Datentabelle'
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
                'optional_nutrients'=> 'Optionale Nährstoffe',
                'portion_quantity'  => 'Menge pro Portion'
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
                'custom'                =>  'Benutzerdefiniert',

                'room_temperature' => [
                    'celsius' => 'Bis zu 25°C',
                    'fahrenheit' => 'Bis zu 77°F'
                ],

                'refrigerated' => [
                    'celsius' => 'Von 1°C bis 5°C',
                    'fahrenheit' => 'Von 33,8°F bis 41°F'
                ],

                'frozen' => [
                    'celsius' => '-18°C',
                    'fahrenheit' => '-0,4°F'
                ]
                            ],
            'allergens'     =>  [
                'title'                     =>  'Allergene',
                'sub_title'                 =>  'Schritt 4: Allergene',
                'allergens'                 =>  'Allergene',
                'contain'                   =>  'Enthält',
                'allergens_derivatives'     =>  'Enthält Derivate',
                'derivatives'               =>  'Derivate',
                'maycontain'                =>  'Kann enthalten',
                'ingredients'               =>  'Zutaten',
                'and_derivatives'           =>  'und Derivate'
            ],
            'finish'        =>  [
                'title'                     =>  'Beenden',
                'sub_title'                 =>  'Schritt 5: Abschluss',
            ]
        ]
    ],

    'recipe' => [
        'singular'          => 'Rezept',
        'plural'            => 'Rezepte',
        'recipeCategory'    => [
            'singular'      => 'Kategorie',
            'plural'        => 'Kategorien',
        ],
        'fields'    =>  [
            'name'                          =>  'Name',
            'name_placeholder'              =>  "Schreiben Sie zwischen '( )', um eine Anmerkung hinzuzufügen",
            'category_placeholder'          => "Wählen Sie eine Kategorie",
            'portion_placeholder'           => '1',
            'weight_placeholder'            => '0,00',
            'preparation_time_placeholder'  => 'Zubereitungsmethode',
            'description'                   =>  'Beschreibung',
            'color'                         =>  'Farbe',
            'recipeCategory'                => 'Kategorie',
            'created_at'                    => 'Erstellt am:',
            'choice_ingredient'             => 'Wählen Sie Zutaten',
            'quantity'                      => 'Menge',
            'quantity_placeholder'          => 'Geben Sie die Menge ein',
            'unit'                          => 'Einheit',
            'method_item_placeholder'       => 'Geben Sie die Zubereitungsmethode ein'
        ],
        'filters'   =>  [
            'id'            =>  'ID',
            'name'  =>  'Name',
            'category_name' => 'Kategorie'
        ],
        'steps'     =>  [
            'info'          =>  [
                'title'             =>  'Informationen',
                'sub_title'         =>  'Schritt 1: Grundlegende Informationen',
                'name'              =>  'Rezeptname',
                'portion'           =>  'Portionen',
                'preparation_time'  =>  'Zubereitungszeit',
                'weight'       =>  'Rezeptgewicht',
            ],
            'ingredients'   =>  [
                'title'             =>  'Zutaten',
                'sub_title'         =>  'Schritt 2: Zutaten hinzufügen',
                'unit'      =>  [
                    'g'             =>  'Gramm (g)',
                    'ml'            =>  'Milliliter (ml)',
                    'unit'          =>  'Einheit'
                ],
                'button'    =>  [
                    'add'           =>  'Zur Liste hinzufügen',
                    'edit'          =>  'Bearbeiten',
                    'remove'        =>  'Entfernen',
                    'save'          =>  'Speichern'
                ],
                'notify'    =>  [
                    'error_add_list'            =>  'Bitte wählen Sie eine Zutat, eine Menge und eine Einheit aus.',
                    'error_edit_list'           =>  'Bitte füllen Sie die Menge aus und wählen Sie die Einheit.'  
                ]
            ],
            'preparation_method'   =>  [
                'title'                 =>  'Zubereitung',
                'sub_title'             =>  'Schritt 3: Zubereitungsmethode',
                'button'    =>  [
                    'step'              =>  'Schritt'
                ]
            ],
            'financial'     =>  [
                'title'                     =>  'Finanziell',
                'sub_title'                 =>  'Schritt 4: Finanzen',
            ],
            'nutritional'   =>  [
                'title'             =>  'Nährwert',
                'sub_title'         =>  'Schritt 5: Nährwerttabelle',
            ],
            'finish'        =>  [
                'title'                     =>  'Abschließen',
                'sub_title'                 =>  'Schritt 6: Abschluss',
            ]
        ]
    ],

    'order' => [
        'singular'          => 'Produktion',
        'plural'            => 'Produktionen',
        'fields'    =>  [
            'recipe_id'     =>  'Rezept',
            'start'         =>  'Startdatum',
            'finish'        =>  'Enddatum',
            'user_id'       =>  'Verantwortlicher Benutzer',
            'quantity'      =>  'Menge',
            'final_weight'  =>  'Endgewicht',
            'fractionation' =>  'Fraktionierung',
            'purpose'       =>  'Zweck',
            'obs'           =>  'Bemerkungen',
            'created_at'    =>  'Erstellt am',
            'updated_at'    =>  'Aktualisiert am'
        ]
    ],

];