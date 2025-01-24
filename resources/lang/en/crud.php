<?php

return [
    'global'    =>  [
        'created_at'    =>  'Created At',
        'updated_at'    =>  'Updated At',
        'next_step'     =>  'Next Step',
        'back'          =>  'Back',
        'need_help'     =>  'Need help?',
        'tutorial'      =>  'Tutorial'
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
            'supplier'                  =>  'Supplier',
            'price'                     =>  'Price',
            'nutritional_information'   =>  'Nutritional Information',
            'seccondary_ingredients'    =>  'Secondary Ingredients',
            'allergens'                 =>  'Allergens',
            'closed_package'            =>  'Closed Package',
            'opened_package'            =>  'Opened Package'
        ],
        'filters'   =>  [
            'id'            =>  'ID',
            'name'          =>  'Name',
            'manufacturer'  =>  'Manufacturer',
            'supplier'      =>  'Supplier'
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
                'package_info'      => 'Type of packaging the ingredient is purchased in.',

                'table'             =>  'Table'
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
                'optional_nutrients'=> 'Optional Nutrients',
                'portion_quantity'  => 'Quantity per serving'
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
                'custom'                =>  'Custom',

                'room_temperature' => [
                    'celsius' => 'Up to 25°C',
                    'fahrenheit' => 'Up to 77°F'
                ],

                'refrigerated' => [
                    'celsius' => 'From 1°C to 5°C',
                    'fahrenheit' => 'From 33.8°F to 41°F'
                ],

                'frozen' => [
                    'celsius' => '-18°C',
                    'fahrenheit' => '-0.4°F'
                ]
            ],
            'allergens'     =>  [
                'title'                     =>  'Allergens',
                'sub_title'                 =>  'Step 4: Allergens',
                'allergens'                 =>  'Allergens',
                'contain'                   =>  'Contains',
                'allergens_derivatives'     =>  'Contains Derivatives',
                'derivatives'               =>  'Derivatives',
                'maycontain'                =>  'May Contain',
                'ingredients'               =>  'Ingredients',
                'and_derivatives'           =>  'and derivatives'
            ],
            'finish'        =>  [
                'title'                     =>  'Finish',
                'sub_title'                 =>  'Step 5: Finishing',
            ]
        ]
    ],

    'recipe' => [
        'singular'          => 'Recipe',
        'plural'            => 'Recipes',
        'recipeCategory'    => [
            'singular'      => 'Category',
            'plural'        => 'Categories',
        ],
        'fields'    =>  [
            'name'                          =>  'Name',
            'name_placeholder'              =>  "Write between '( )' to add a note",
            'category_placeholder'          => "Select a category",
            'portion_placeholder'           => '1',
            'weight_placeholder'            => '0.00',
            'preparation_time_placeholder'  => 'Preparation method',
            'description'                   =>  'Description',
            'color'                         =>  'Color',
            'recipeCategory'                => 'Category',
            'created_at'                    => 'Created on:',
            'choice_ingredient'             => 'Choose ingredients',
            'quantity'                      => 'Quantity',
            'quantity_placeholder'          => 'Enter the quantity',
            'unit'                          => 'Unit',
            'method_item_placeholder'       => 'Enter the preparation method'
        ],
        'filters'   =>  [
            'id'            =>  'ID',
            'name'  =>  'Name',
            'category_name' => 'Category'
        ],
        'steps'     =>  [
            'info'          =>  [
                'title'             =>  'Information',
                'sub_title'         =>  'Step 1: Basic Information',
                'name'              =>  'Recipe Name',
                'portion'           =>  'Portion',
                'preparation_time'  =>  'Preparation Time',
                'weight'       =>  'Recipe Weight',
            ],
            'ingredients'   =>  [
                'title'             =>  'Ingredients',
                'sub_title'         =>  'Step 2: Add Ingredients',
                'unit'      =>  [
                    'g'             =>  'Grams (g)',
                    'ml'            =>  'Milliliters (ml)',
                    'unit'          =>  'Unit'
                ],
                'button'    =>  [
                    'add'           =>  'Add to list',
                    'edit'          =>  'Edit',
                    'remove'        =>  'Remove',
                    'save'          =>  'Save'
                ],
                'notify'    =>  [
                    'error_add_list'            =>  'Please select an ingredient, a quantity, and choose the unit.',
                    'error_edit_list'           =>  'Please fill in the quantity and choose the unit.'  
                ]
            ],
            'preparation_method'   =>  [
                'title'                 =>  'Preparation',
                'sub_title'             =>  'Step 3: Preparation Method',
                'button'    =>  [
                    'step'              =>  'Step'
                ]
            ],
            'financial'     =>  [
                'title'                     =>  'Financial',
                'sub_title'                 =>  'Step 4: Financial',
            ],
            'nutritional'   =>  [
                'title'             =>  'Nutritional',
                'sub_title'         =>  'Step 5: Nutritional Table',
            ],
            'finish'        =>  [
                'title'                     =>  'Finish',
                'sub_title'                 =>  'Step 6: Finalization',
            ]
        ]
    ],

    'order' => [
        'singular'          => 'Production',
        'plural'            => 'Productions',
        'fields'    =>  [
            'recipe_id'     =>  'Recipe',
            'start'         =>  'Start Date',
            'finish'        =>  'End Date',
            'user_id'       =>  'Responsible User',
            'quantity'      =>  'Quantity',
            'final_weight'  =>  'Final Weight',
            'fractionation' =>  'Fractionation',
            'purpose'       =>  'Purpose',
            'obs'           =>  'Observations',
            'created_at'    =>  'Created at',
            'updated_at'    =>  'Updated at'
        ]
    ],


];