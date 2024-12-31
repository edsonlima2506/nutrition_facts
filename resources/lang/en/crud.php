<?php

return [
    'global'    =>  [
        'created_at'    =>  'Created At',
        'updated_at'    =>  'Updated At',
        'next_step'     =>  'Next Step',
        'back'          =>  'Back',
        'need_help'     =>  'Need help?'
    ],

    'company'   =>  [
        'singular'  =>  'Company',
        'plural'    =>  'Companies',
        'fields'    =>  [
            'name'      =>  'Name',
            'pattern'   =>  'Pattern',
            'country'   =>  'Country',
            'state'     =>  'State',
            'city'      =>  'City'
        ]
    ],

    'ingredient'    =>  [
        'singular'  =>  'Ingredient',
        'plural'    =>  'Ingredients',
        'fields'    =>  [
            'name'                      =>  'Name',
            'name_placeholder'          =>  "Type between '( )' to add a note",
            'manufacturer'              =>  'Manufacturer',
            'price'                     =>  'Price',
            'nutritional_information'   =>  'Nutritional Information',
            'seccondary_ingredients'    =>  'Secondary Ingredients',
            'allergens'                 =>  'Allergens'
        ],
        'steps'     =>  [
            'info' => [
                'title'             => 'Information',
                'sub_title'         => 'Step 1: Basic Information',
                'name'              => 'Ingredient Name',
                'manufacturer'      => 'Manufacturer',
                'supplier'          => 'Supplier',

                'price'             => 'Price per Unit',
                'price_info'        => 'Price paid for each unit of this ingredient',

                'gross_weight'      => 'Gross Weight',
                'gross_weight_info' => 'Weight before any discarding or cleaning of the ingredient',
                
                'net_weight'        => 'Net Weight',
                'net_weight_info'   => 'Weight of the ingredient after discarding or cleaning',
                
                'loss'              => 'Loss',
                'loss_info'         => 'Weight lost during the discarding or cleaning process',

                'price_kilo'        => 'Price per Kg/L',
                'price_kilo_info'   => 'Price paid for each Kg/L',

                'correction_factor' => 'Correction Factor',
                'correction_factor_info' => 'Number indicating the weight loss an ingredient suffers during preparation',

                'revenue'           => 'Yield',
                'revenue_info'      => 'Percentage of the ingredient that is usable',

                'package'           => 'Packaging',
                'package_info'      => 'Type of packaging the ingredient is purchased in.'
            ],
            'nutritional' => [
                'title'             => 'Nutritional',
                'sub_title'         => 'Step 2: Nutritional Table',
                'modal_title'       => 'Add Nutrient',
                'modal_nutrient'    => 'Nutrient',
                'modal_value'       => 'Value',
                'modal_close'       => 'Close',
                'modal_add'         => 'Add',
                'portion'           => 'Portion',
                'portion_info'      => 'Measure (portion)',
                'optional_nutrients'=> 'Optional Nutrients'
            ],
            'storage'   =>  [
                'title'                 =>  'Storage',
                'sub_title'             =>  'Step 3: Storage',
                'closed_package_label'  =>  'Closed Package Storage',
                'opened_package_label'  =>  'Opened Package Storage',
                'storage_place'         =>  'Storage Place',
                'storage_temperature'   =>  'Storage Temperature',
                
                'dry_fresh'             =>  'Dry and Fresh',
                'sheltered_the_sun'     =>  'Sheltered from the Sun',
                'refrigerator'          =>  'Refrigerator',
                'freezer'               =>  'Freezer',
                'custom'                =>  'Custom'
            ],
            'allergens'     =>  [
                'title'                     =>  'Allergens',
                'sub_title'                 =>  'Step 4: Allergens',
                'allergens'                 =>  'Allergens',
                'contain'                   =>  'Contains',
                'allergens_derivatives'     =>  'Contains Derivatives',
                'derivatives'               =>  'Derivatives',
                'maycontain'                =>  'May Contain',
                'ingredients'               =>  'Ingredients'
            ],
            'finish'        =>  [
                'title'                     =>  'Finish',
                'sub_title'                 =>  'Step 5: Finishing',
            ]
        ]
    ]
];