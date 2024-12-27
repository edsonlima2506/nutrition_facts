<?php

return [
    'global'    =>  [
        'created_at'    =>  'Creado El',
        'updated_at'    =>  'Actualizado El',
        'next_step'     =>  'Siguiente Paso',
        'back'          =>  'Para Volver',
        'need_help'     =>  '¿Necesitas ayuda?'
    ],

    'company'   =>  [
        'singular'  =>  'Empresa',
        'plural'    =>  'Empresas',
        'fields'    =>  [
            'name'      =>  'Nombre',
            'pattern'   =>  'Patrón',
            'country'   =>  'País',
            'state'     =>  'Estado',
            'city'      =>  'Ciudad'
        ]
    ],

    'ingredient'    =>  [
        'singular'  =>  'Ingrediente',
        'plural'    =>  'Ingredientes',
        'fields'    =>  [
            'name'                      =>  'Nombre',
            'name_placeholder'          =>  "Escribe entre '( )' para agregar una observación",
            'manufacturer'              =>  'Fabricante',
            'price'                     =>  'Precio',
            'nutritional_information'   =>  'Información Nutricional',
            'seccondary_ingredients'    =>  'Ingredientes Secundarios',
            'allergens'                 =>  'Alérgenos'
        ],
        'steps'     =>  [
            'info'          =>  [
                'title'         =>  'Información',
                'sub_title'     =>  'Paso 1: Información Básica',
                'name'          =>  'Nombre del Ingrediente',
                'manufacturer'  =>  'Fabricante',
                'price'         =>  'Precio',
            ],
            'nutritional'   =>  [
                'title'         =>  'Nutricional',
                'sub_title'     =>  'Paso 2: Tabla Nutricional',
                'modal_title'   =>  'Agregar Nutriente',
                'modal_nutrient'   =>  'Nutriente',
                'modal_close'   =>  'Cerrar',
                'modal_add'     =>  'Agregar'
            ],
            'ingredients'   =>  [
                'title'         =>  'Ingredientes',
                'sub_title'     =>  'Paso 3: Ingredientes',
                'ingredients'   =>  'Ingredientes',
            ],
            'allergens'     =>  [
                'title'                     =>  'Alérgenos',
                'sub_title'                 =>  'Paso 4: Alérgenos',
                'allergens'                 =>  'Alérgenos',
                'contain'                   =>  'Contiene',
                'allergens_derivatives'     =>  'Contiene Derivados',
                'derivatives'               =>  'Derivados',
                'maycontain'                =>  'Puede Contener'
            ],
            'save'          =>  'Guardar'
        ]
    ]
];