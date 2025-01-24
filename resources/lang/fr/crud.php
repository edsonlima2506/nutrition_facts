<?php

return [
    'global'    =>  [
        'created_at'    =>  'Créé Le',
        'updated_at'    =>  'Mis À Jour Le',
        'next_step'     =>  'Étape Suivante',
        'back'          =>  'Revenir',
        'need_help'     =>  'Besoin d\'aide ?',
        'tutorial'      =>  'Tutoriel'
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
            'supplier'                  =>  'Fournisseur',
            'price'                     =>  'Prix',
            'nutritional_information'   =>  'Informations Nutritionnelles',
            'seccondary_ingredients'    =>  'Ingrédients Secondaires',
            'allergens'                 =>  'Allergènes',
            'closed_package'            =>  'Emballage Fermé',
            'opened_package'            =>  'Emballage Ouvert'
        ],
        'filters'   =>  [
            'id'            =>  'ID',
            'name'          =>  'Nom',
            'manufacturer'  =>  'Fabricant',
            'supplier'      =>  'Fournisseur'
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
                'package_info'      => 'Type d\'emballage dans lequel l\'ingrédient est acheté.',

                'table'             =>  'Tableau'
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
                'optional_nutrients'=> 'Nutriments Optionnels',
                'portion_quantity'  => 'Quantité par portion'
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
                'custom'                =>  'Personnalisé',

                'room_temperature' => [
                    'celsius' => 'Jusqu\'à 25°C',
                    'fahrenheit' => 'Jusqu\'à 77°F'
                ],

                'refrigerated' => [
                    'celsius' => 'De 1°C à 5°C',
                    'fahrenheit' => 'De 33,8°F à 41°F'
                ],

                'frozen' => [
                    'celsius' => '-18°C',
                    'fahrenheit' => '-0,4°F'
                ]
            ],
            'allergens'     =>  [
                'title'                     =>  'Allergènes',
                'sub_title'                 =>  'Étape 4: Allergènes',
                'allergens'                 =>  'Allergènes',
                'contain'                   =>  'Contient',
                'allergens_derivatives'     =>  'Contient des Dérivés',
                'derivatives'               =>  'Dérivés',
                'maycontain'                =>  'Peut Contenir',
                'ingredients'               =>  'Ingrédients',
                'and_derivatives'           =>  'et dérivés'
            ],
            'finish'        =>  [
                'title'                     =>  'Finition',
                'sub_title'                 =>  'Étape 5: Finition',
            ]
        ]
    ],

    'recipe' => [
        'singular'          => 'Recette',
        'plural'            => 'Recettes',
        'recipeCategory'    => [
            'singular'      => 'Catégorie',
            'plural'        => 'Catégories',
        ],
        'fields'    =>  [
            'name'                          =>  'Nom',
            'name_placeholder'              =>  "Écrivez entre '( )' pour ajouter une note",
            'category_placeholder'          => "Sélectionnez une catégorie",
            'portion_placeholder'           => '1',
            'weight_placeholder'            => '0,00',
            'preparation_time_placeholder'  => 'Méthode de préparation',
            'description'                   =>  'Description',
            'color'                         =>  'Couleur',
            'recipeCategory'                => 'Catégorie',
            'created_at'                    => 'Créé le :',
            'choice_ingredient'             => 'Choisissez des ingrédients',
            'quantity'                      => 'Quantité',
            'quantity_placeholder'          => 'Entrez la quantité',
            'unit'                          => 'Unité',
            'method_item_placeholder'       => 'Entrez la méthode de préparation'
        ],
        'filters'   =>  [
            'id'            =>  'ID',
            'name'  =>  'Nom',
            'category_name' => 'Catégorie'
        ],
        'steps'     =>  [
            'info'          =>  [
                'title'             =>  'Informations',
                'sub_title'         =>  'Étape 1 : Informations de base',
                'name'              =>  'Nom de la recette',
                'portion'           =>  'Portion',
                'preparation_time'  =>  'Temps de préparation',
                'weight'       =>  'Poids de la recette',
            ],
            'ingredients'   =>  [
                'title'             =>  'Ingrédients',
                'sub_title'         =>  'Étape 2 : Ajouter des ingrédients',
                'unit'      =>  [
                    'g'             =>  'Grammes (g)',
                    'ml'            =>  'Millilitres (ml)',
                    'unit'          =>  'Unité'
                ],
                'button'    =>  [
                    'add'           =>  'Ajouter à la liste',
                    'edit'          =>  'Éditer',
                    'remove'        =>  'Retirer',
                    'save'          =>  'Sauvegarder'
                ],
                'notify'    =>  [
                    'error_add_list'            =>  'Veuillez sélectionner un ingrédient, une quantité et choisir l\'unité.',
                    'error_edit_list'           =>  'Veuillez remplir la quantité et choisir l\'unité.'  
                ]
            ],
            'preparation_method'   =>  [
                'title'                 =>  'Préparation',
                'sub_title'             =>  'Étape 3 : Méthode de préparation',
                'button'    =>  [
                    'step'              =>  'Étape'
                ]
            ],
            'financial'     =>  [
                'title'                     =>  'Financier',
                'sub_title'                 =>  'Étape 4 : Financier',
            ],
            'nutritional'   =>  [
                'title'             =>  'Nutritionnel',
                'sub_title'         =>  'Étape 5 : Tableau nutritionnel',
            ],
            'finish'        =>  [
                'title'                     =>  'Terminer',
                'sub_title'                 =>  'Étape 6 : Finalisation',
            ]
        ]
    ],

    'order' => [
        'singular'          => 'Production',
        'plural'            => 'Productions',
        'fields'    =>  [
            'recipe_id'     =>  'Recette',
            'start'         =>  'Date de début',
            'finish'        =>  'Date de fin',
            'user_id'       =>  'Utilisateur responsable',
            'quantity'      =>  'Quantité',
            'final_weight'  =>  'Poids final',
            'fractionation' =>  'Fractionnement',
            'purpose'       =>  'Motif',
            'obs'           =>  'Observations',
            'created_at'    =>  'Créé le',
            'updated_at'    =>  'Mis à jour le'
        ]
    ],


];