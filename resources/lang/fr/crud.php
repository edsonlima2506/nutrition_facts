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
            'info'          =>  [
                'title'         =>  'Informations',
                'sub_title'     =>  'Étape 1 : Informations de Base',
                'name'          =>  'Nom de l\'Ingrédient',
                'manufacturer'  =>  'Fabricant',
                'price'         =>  'Prix',
            ],
            'nutritional'   =>  [
                'title'         =>  'Nutritionnel',
                'sub_title'     =>  'Étape 2 : Tableau Nutritionnel',
                'modal_title'   =>  'Ajouter un Nutriment',
                'modal_nutrient'   =>  'Nutriment',
                'modal_close'   =>  'Fermer',
                'modal_add'     =>  'Ajouter'
            ],
            'ingredients'   =>  [
                'title'         =>  'Ingrédients',
                'sub_title'     =>  'Étape 3 : Ingrédients',
                'ingredients'   =>  'Ingrédients',
            ],
            'allergens'     =>  [
                'title'                     =>  'Allergènes',
                'sub_title'                 =>  'Étape 4 : Allergènes',
                'allergens'                 =>  'Allergènes',
                'contain'                   =>  'Contient',
                'allergens_derivatives'     =>  'Contient des Dérivés',
                'derivatives'               =>  'Dérivés',
                'maycontain'                =>  'Peut Contenir'
            ],
            'save'          =>  'Enregistrer'
        ]
    ]
];