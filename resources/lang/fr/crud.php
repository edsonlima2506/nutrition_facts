<?php

return [
    'global'    =>  [
        'created_at'    =>  'Créé Le',
        'updated_at'    =>  'Mis À Jour Le',
        'next_step'     =>  'Étape Suivante',
        'back'          =>  'Revenir',
        'need_help'     =>  'Besoin d\'aide ?'
    ],

    'company'   =>  [
        'singular'  =>  'Entreprise',
        'plural'    =>  'Entreprises',
        'fields'    =>  [
            'name'      =>  'Nom',
            'pattern'   =>  'Modèle',
            'country'   =>  'Pays',
            'state'     =>  'État',
            'city'      =>  'Ville'
        ]
    ],

    'ingredient'    =>  [
        'singular'  =>  'Ingrédient',
        'plural'    =>  'Ingrédients',
        'fields'    =>  [
            'name'                      =>  'Nom',
            'name_placeholder'          =>  "Écrivez entre '( )' pour ajouter une remarque",
            'manufacturer'              =>  'Fabricant',
            'price'                     =>  'Prix',
            'nutritional_information'   =>  'Informations Nutritionnelles',
            'seccondary_ingredients'    =>  'Ingrédients Secondaires',
            'allergens'                 =>  'Allergènes'
        ],
        'steps'     =>  [
            'info' => [
                'title'             => 'Informations',
                'sub_title'         => 'Étape 1: Informations de Base',
                'name'              => 'Nom de l\'Ingrédient',
                'manufacturer'      => 'Fabricant',
                'supplier'          => 'Fournisseur',

                'price'             => 'Prix par Unité',
                'price_info'        => 'Prix payé pour chaque unité de cet ingrédient',

                'gross_weight'      => 'Poids Brut',
                'gross_weight_info' => 'Poids avant tout rejet ou nettoyage de l\'ingrédient',
                
                'net_weight'        => 'Poids Net',
                'net_weight_info'   => 'Poids de l\'ingrédient après rejet ou nettoyage',
                
                'loss'              => 'Perte',
                'loss_info'         => 'Poids perdu lors du processus de rejet ou nettoyage',

                'price_kilo'        => 'Prix par Kg/L',
                'price_kilo_info'   => 'Prix payé pour chaque Kg/L',

                'correction_factor' => 'Facteur de Correction',
                'correction_factor_info' => 'Nombre indiquant la perte de poids subie par un aliment lors de la préparation',

                'revenue'           => 'Rendement',
                'revenue_info'      => 'Pourcentage utilisé de l\'ingrédient',

                'package'           => 'Emballage',
                'package_info'      => 'Type d\'emballage dans lequel l\'ingrédient est acheté.'
            ],
            'nutritional' => [
                'title'             => 'Nutritionnel',
                'sub_title'         => 'Étape 2: Tableau Nutritionnel',
                'modal_title'       => 'Ajouter Nutriment',
                'modal_nutrient'    => 'Nutriment',
                'modal_value'       => 'Valeur',
                'modal_close'       => 'Fermer',
                'modal_add'         => 'Ajouter',
                'portion'           => 'Portion',
                'portion_info'      => 'Mesure (portion)',
                'optional_nutrients'=> 'Nutriments Optionnels'
            ],
            'storage'   =>  [
                'title'                 =>  'Conservation',
                'sub_title'             =>  'Étape 3: Conservation',
                'closed_package_label'  =>  'Conservation Emballage Fermé',
                'opened_package_label'  =>  'Conservation Emballage Ouvert',
                'storage_place'         =>  'Lieu de Conservation',
                'storage_temperature'   =>  'Température de Conservation',
                
                'dry_fresh'             =>  'Sec et Frais',
                'sheltered_the_sun'     =>  'À l\'abri du Soleil',
                'refrigerator'          =>  'Réfrigérateur',
                'freezer'               =>  'Congélateur',
                'custom'                =>  'Personnalisé'
            ],
            'allergens'     =>  [
                'title'                     =>  'Allergènes',
                'sub_title'                 =>  'Étape 4: Allergènes',
                'allergens'                 =>  'Allergènes',
                'contain'                   =>  'Contient',
                'allergens_derivatives'     =>  'Contient des Dérivés',
                'derivatives'               =>  'Dérivés',
                'maycontain'                =>  'Peut Contenir',
                'ingredients'               =>  'Ingrédients'
            ],
            'finish'        =>  [
                'title'                     =>  'Finition',
                'sub_title'                 =>  'Étape 5: Finition',
            ]
        ]
    ]
];