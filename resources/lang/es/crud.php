<?php

return [
    'global'    =>  [
        'created_at'    =>  'Creado El',
        'updated_at'    =>  'Actualizado El',
        'next_step'     =>  'Siguiente Paso',
        'back'          =>  'Para Volver',
        'need_help'     =>  '¿Necesitas ayuda?',
        'tutorial'      =>  'Tutorial'
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
            'supplier'                  =>  'Proveedor',
            'price'                     =>  'Precio',
            'nutritional_information'   =>  'Información Nutricional',
            'seccondary_ingredients'    =>  'Ingredientes Secundarios',
            'allergens'                 =>  'Alérgenos',
            'closed_package'            =>  'Paquete Cerrado',
            'opened_package'            =>  'Paquete Abierto'
        ],
        'filters'   =>  [
            'id'            =>  'ID',
            'name'          =>  'Nombre',
            'manufacturer'  =>  'Fabricante',
            'supplier'      =>  'Proveedor'
        ],
        'steps'     =>  [
            'info' => [
                'title'             => 'Información',
                'sub_title'         => 'Etapa 1: Información Básica',
                'name'              => 'Nombre del Ingrediente',
                'manufacturer'      => 'Fabricante',
                'supplier'          => 'Proveedor',

                'price'             => 'Precio por Unidad',
                'price_info'        => 'Precio pagado por cada unidad de este ingrediente',

                'gross_weight'      => 'Peso Bruto',
                'gross_weight_info' => 'Peso antes de cualquier descarte o limpieza del ingrediente',
                
                'net_weight'        => 'Peso Neto',
                'net_weight_info'   => 'Peso del ingrediente después del descarte o limpieza',
                
                'loss'              => 'Pérdida',
                'loss_info'         => 'Peso perdido en el proceso de descarte o limpieza',

                'price_kilo'        => 'Precio por Kg/L',
                'price_kilo_info'   => 'Precio pagado por cada Kg/L',

                'correction_factor' => 'Factor de Corrección',
                'correction_factor_info' => 'Número que indica la pérdida de peso que sufre un alimento durante la preparación',

                'revenue'           => 'Rendimiento',
                'revenue_info'      => 'Porcentaje aprovechado del ingrediente',

                'package'           => 'Envase',
                'package_info'      => 'Tipo de envase con el que se compra el ingrediente.',

                'table'             =>  'Tabla'
            ],
            'nutritional' => [
                'title'             => 'Nutricional',
                'sub_title'         => 'Etapa 2: Tabla Nutricional',
                'modal_title'       => 'Añadir Nutriente',
                'modal_nutrient'    => 'Nutriente',
                'modal_value'       => 'Valor',
                'modal_close'       => 'Cerrar',
                'modal_add'         => 'Añadir',
                'portion'           => 'Porción',
                'portion_info'      => 'Medida (porción)',
                'optional_nutrients'=> 'Nutrientes Opcionales'
            ],
            'storage'   =>  [
                'title'                 =>  'Conservación',
                'sub_title'             =>  'Etapa 3: Conservación',
                'closed_package_label'  =>  'Conservación Envase Cerrado',
                'opened_package_label'  =>  'Conservación Envase Abierto',
                'storage_place'         =>  'Lugar de Almacenamiento',
                'storage_temperature'   =>  'Temperatura de Almacenamiento',
                
                'dry_fresh'             =>  'Seco y Fresco',
                'sheltered_the_sun'     =>  'A la Sombra del Sol',
                'refrigerator'          =>  'Refrigerador',
                'freezer'               =>  'Congelador',
                'custom'                =>  'Personalizado',

                'room_temperature' => [
                    'celsius' => 'Hasta 25°C',
                    'fahrenheit' => 'Hasta 77°F'
                ],

                'refrigerated' => [
                    'celsius' => 'De 1°C a 5°C',
                    'fahrenheit' => 'De 33,8°F a 41°F'
                ],

                'frozen' => [
                    'celsius' => '-18°C',
                    'fahrenheit' => '-0,4°F'
                ]
            ],
            'allergens'     =>  [
                'title'                     =>  'Alérgenos',
                'sub_title'                 =>  'Paso 4: Alérgenos',
                'allergens'                 =>  'Alérgenos',
                'contain'                   =>  'Contiene',
                'allergens_derivatives'     =>  'Contiene Derivados',
                'derivatives'               =>  'Derivados',
                'maycontain'                =>  'Puede Contener',
                'ingredients'               =>  'Ingredientes',
                'and_derivatives'           =>  'e derivados',
                'portion_quantity'          =>  'Cantidad por porción'
            ],
            'finish'        =>  [
                'title'                     =>  'Finalizar',
                'sub_title'                 =>  'Fase 5: Refinamiento',
            ]
        ]
    ],

    'recipe' => [
        'singular'          => 'Receta',
        'plural'            => 'Recetas',
        'recipeCategory'    => [
            'singular'      => 'Categoría',
            'plural'        => 'Categorías',
        ],
        'fields'    =>  [
            'name'                          =>  'Nombre',
            'name_placeholder'              =>  "Escribe entre '( )' para agregar una nota",
            'category_placeholder'          => "Selecciona una categoría",
            'portion_placeholder'           => '1',
            'weight_placeholder'            => '0,00',
            'preparation_time_placeholder'  => 'Método de preparación',
            'description'                   =>  'Descripción',
            'color'                         =>  'Color',
            'recipeCategory'                => 'Categoría',
            'created_at'                    => 'Creado en:',
            'choice_ingredient'             => 'Elige ingredientes',
            'quantity'                      => 'Cantidad',
            'quantity_placeholder'          => 'Introduce la cantidad',
            'unit'                          => 'Unidad',
            'method_item_placeholder'       => 'Introduce el método de preparación'
        ],
        'filters'   =>  [
            'id'            =>  'ID',
            'name'  =>  'Nombre',
            'category_name' => 'Categoría'
        ],
        'steps'     =>  [
            'info'          =>  [
                'title'             =>  'Información',
                'sub_title'         =>  'Paso 1: Información básica',
                'name'              =>  'Nombre de la receta',
                'portion'           =>  'Porción',
                'preparation_time'  =>  'Tiempo de preparación',
                'weight'       =>  'Peso de la receta',
            ],
            'ingredients'   =>  [
                'title'             =>  'Ingredientes',
                'sub_title'         =>  'Paso 2: Agregar ingredientes',
                'unit'      =>  [
                    'g'             =>  'Gramos (g)',
                    'ml'            =>  'Mililitros (ml)',
                    'unit'          =>  'Unidad'
                ],
                'button'    =>  [
                    'add'           =>  'Añadir a la lista',
                    'edit'          =>  'Editar',
                    'remove'        =>  'Eliminar',
                    'save'          =>  'Guardar'
                ],
                'notify'    =>  [
                    'error_add_list'            =>  'Por favor, selecciona un ingrediente, una cantidad y elige la unidad.',
                    'error_edit_list'           =>  'Por favor, completa la cantidad y elige la unidad.'  
                ]
            ],
            'preparation_method'   =>  [
                'title'                 =>  'Preparación',
                'sub_title'             =>  'Paso 3: Método de preparación',
                'button'    =>  [
                    'step'              =>  'Paso'
                ]
            ],
            'financial'     =>  [
                'title'                     =>  'Financiero',
                'sub_title'                 =>  'Paso 4: Financiero',
            ],
            'nutritional'   =>  [
                'title'             =>  'Nutricional',
                'sub_title'         =>  'Paso 5: Tabla nutricional',
            ],
            'finish'        =>  [
                'title'                     =>  'Finalizar',
                'sub_title'                 =>  'Paso 6: Finalización',
            ]
        ]
    ],

    'order' => [
        'singular'          => 'Producción',
        'plural'            => 'Producciones',
        'fields'    =>  [
            'recipe_id'     =>  'Receta',
            'start'         =>  'Fecha de inicio',
            'finish'        =>  'Fecha de fin',
            'user_id'       =>  'Usuario responsable',
            'quantity'      =>  'Cantidad',
            'final_weight'  =>  'Peso final',
            'fractionation' =>  'Fraccionamiento',
            'purpose'       =>  'Motivo',
            'obs'           =>  'Observaciones',
            'created_at'    =>  'Creado en',
            'updated_at'    =>  'Actualizado en'
        ]
    ],


];