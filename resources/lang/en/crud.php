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
            'info'          =>  [
                'title'         =>  'Information',
                'sub_title'     =>  'Step 1: Basic Information',
                'name'          =>  'Ingredient Name',
                'manufacturer'  =>  'Manufacturer',
                'price'         =>  'Price',
            ],
            'nutritional'   =>  [
                'title'         =>  'Nutritional',
                'sub_title'     =>  'Step 2: Nutritional Table',
                'modal_title'   =>  'Add Nutrient',
                'modal_nutrient'   =>  'Nutrient',
                'modal_close'   =>  'Close',
                'modal_add'     =>  'Add'
            ],
            'ingredients'   =>  [
                'title'         =>  'Ingredients',
                'sub_title'     =>  'Step 3: Ingredients',
                'ingredients'   =>  'Ingredients',
            ],
            'allergens'     =>  [
                'title'                     =>  'Allergens',
                'sub_title'                 =>  'Step 4: Allergens',
                'allergens'                 =>  'Allergens',
                'contain'                   =>  'Contains',
                'allergens_derivatives'     =>  'Contains Derivatives',
                'derivatives'               =>  'Derivatives',
                'maycontain'                =>  'May Contain'
            ],
            'save'          =>  'Save'
        ]
    ]
];