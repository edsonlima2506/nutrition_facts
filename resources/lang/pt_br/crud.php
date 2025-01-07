<?php

return [
    'global'        =>  [
        'created_at'    =>  'Criado Em',
        'updated_at'    =>  'Atualizado Em',
        'next_step'     =>  'Próxima Etapa',
        'back'          =>  'Voltar',
        'need_help'     =>  'Precisa de Ajuda?',
        'tutorial'      =>  'Tutorial'
    ],

    'company'       =>  [
        'singular'  =>  'Empresa',
        'plural'    =>  'Empresas',
        'fields'    =>  [
            'name'      =>  'Nome',
            'pattern'   =>  'Padrão',
            'country'   =>  'País',
            'state'     =>  'Estado',
            'city'      =>  'Cidade'
        ]
    ],

    
    'ingredient'    =>  [
        'singular'  =>  'Ingrediente',
        'plural'    =>  'Ingredientes',
        'fields'    =>  [
            'name'                      =>  'Nome',
            'name_placeholder'          =>  "Escreva entre '( )' para adicionar observação",
            'manufacturer'              =>  'Fabricante',
            'supplier'                  =>  'Fornecedor',
            'price'                     =>  'Preço',
            'nutritional_information'   =>  'Informações Nutricionais',
            'seccondary_ingredients'    =>  'Igredientes',
            'allergens'                 =>  'Alérgenos',
            'closed_package'            =>  'Embalagem Fechada',
            'opened_package'            =>  'Embalagem Aberta'
        ],
        'filters'   =>  [
            'id'            =>  'ID',
            'name'          =>  'Nome',
            'manufacturer'  =>  'Fabricante',
            'supplier'      =>  'Fornecedor'
        ],
        'steps'     =>  [
            'info'          =>  [
                'title'             =>  'Informações',
                'sub_title'         =>  'Etapa 1: Informações Básicas',
                'name'              =>  'Nome do Ingrediente',
                'manufacturer'      =>  'Fabricante',
                'supplier'          =>  'Fornecedor',

                'price'             =>  'Preço Unidade',
                'price_info'        =>  'Preço pago pela unidade deste ingrediente',

                'gross_weight'      =>  'Peso Bruto',
                'gross_weight_info' =>  'Peso antes de qualquer descarte ou limpeza do ingrediente',
                
                'net_weight'        =>  'Peso Líquido',
                'net_weight_info'   =>  'Peso do ingrediente após descarte ou limpeza',
                
                'loss'              =>  'Perda',
                'loss_info'         =>  'Peso perdido no processo de descarte ou limpeza',

                'price_kilo'        =>  'Preço Kg/L',
                'price_kilo_info'   =>  'Preço pago para cada Kg/L',

                'correction_factor'         =>  'Fator de Correção',
                'correction_factor_info'    =>  'Número que indica a perda de peso que um alimento sofre durante o pré-preparo',
                
                'revenue'           =>  'Rendimento',
                'revenue_info'      =>  'Porcentagem aproveitada do ingrediente',

                'package'           =>  'Embalagem',
                'package_info'      =>  'Tipo de embalagem que o ingrediente é comprado.',

                'table'             =>  'Tabela'
            ],
            'nutritional'   =>  [
                'title'             =>  'Nutricional',
                'sub_title'         =>  'Etapa 2: Tabela Nutricional',
                'modal_title'       =>  'Adicionar Nutriente',
                'modal_nutrient'    =>  'Nutriente',
                'modal_value'       =>  'Valor',
                'modal_close'       =>  'Fechar',
                'modal_add'         =>  'Adicionar',
                'portion'           =>  'Porção',
                'portion_info'      =>  'Medida (porção)',
                'optional_nutrients'=>  'Nutrientes Opcionais',
                'portion_quantity'  =>  'Quantidade por porção'
            ],
            'storage'   =>  [
                'title'                 =>  'Conservação',
                'sub_title'             =>  'Etapa 3: Conservação',
                'closed_package_label'  =>  'Conservação Embalagem Fechada',
                'opened_package_label'  =>  'Conservação Embalagem Aberta',
                'storage_place'         =>  'Local de Armazenamento',
                'storage_temperature'   =>  'Temperatura de Armazenamento',
                
                'dry_fresh'             =>  'Seco e Fresco',
                'sheltered_the_sun'     =>  'Ao abrigo do Sol',
                'refrigerator'          =>  'Geladeira',
                'freezer'               =>  'Congelador',
                'custom'                =>  'Personalizado',

                'room_temperature'      =>  [
                    'celsius'           =>  'Até 25°C',
                    'fahrenheit'        =>  'Até 77°F'
                ],

                'refrigerated'          =>  [
                    'celsius'           =>  'De 1°C a 5°C',
                    'fahrenheit'        =>  'De 33,8°F a 41°F'
                ],

                'frozen'                =>  [
                    'celsius'           =>  '-18°C',
                    'fahrenheit'        =>  '-0,4°F'
                ]
            ],
            'allergens'     =>  [
                'title'                     =>  'Alérgenos',
                'sub_title'                 =>  'Etapa 4: Alérgenos',
                'allergens'                 =>  'Alérgenos',
                'contain'                   =>  'Contém',
                'allergens_derivatives'     =>  'Contém Derivados',
                'derivatives'               =>  'Derivados',
                'maycontain'                =>  'Pode Conter',
                'ingredients'               =>  'Ingredientes',
                'and_derivatives'           =>  'e derivados'
            ],
            'finish'        =>  [
                'title'                     =>  'Finalizar',
                'sub_title'                 =>  'Etapa 5: Finalização',
            ]
        ]
    ],

    'recipe' => [
        'singular'          => 'Receita',
        'plural'            => 'Receitas',
        'recipeCategory'    => [
                'singular'      => 'Categoria',
                'plural'        => 'Categorias'
        ],
        'fields'    =>  [
            'name'                          =>  'Nome',
            'name_placeholder'              =>  "Escreva entre '( )' para adicionar observação",
            'category_placeholder'          => "Selecione uma categoria",
            'portion_placeholder'           => '1',
            'weight_placeholder'            => '0,00',
            'preparation_time_placeholder'  => 'Modo de preparo',
            'description'                   =>  'Descrição',
            'color'                         =>  'Cor',
            'recipeCategory'                => 'Categoria',
            'created_at'                    => 'Criado em:',
            'choice_ingredient'             => 'Escolha os ingredientes',
            'quantity'                      => 'Quantidade',
            'quantity_placeholder'          => 'Digite a quantidade',
            'unit'                          => 'Unidade',
            'method_item_placeholder'       => 'Digite o método de preparo'
        ],
        'filters'   =>  [
            'id'            =>  'ID',
            'name'  =>  'name',
            'category_name' => 'Categoria'
        ],
        'steps'     =>  [
            'info'          =>  [
                'title'             =>  'Informações',
                'sub_title'         =>  'Etapa 1: Informações Básicas',
                'name'              =>  'Nome da Receita',
                'portion'           =>  'Rendimento',
                'preparation_time'  =>  'Tempo de preparo',
                'weight'       =>  'Peso da Receita',
            ],
            'ingredients'   =>  [
                'title'             =>  'Ingredientes',
                'sub_title'         =>  'Etapa 2: Adicionar Ingredientes',
                'unit'      =>  [
                    'g'             =>  'Gramas (g)',
                    'ml'            =>  'Mililitros (ml)',
                    'unit'          =>  'Unidade'
                ],
                'button'    =>  [
                    'add'           =>  'Adicionar à lista',
                    'edit'          =>  'Editar',
                    'remove'        =>  'Remover',
                    'save'          =>  'Salvar'
                ],
                'notify'    =>  [
                    'error_add_list'            =>  'Por favor, selecione um ingrediente, uma quantidade e escolha a unidade.',
                    'error_edit_list'           =>  'Por favor, preencha a quantidade e escolha a unidade.'  
                ]
            ],
            'preparation_method'   =>  [
                'title'                 =>  'Preparação',
                'sub_title'             =>  'Etapa 3: Modo de Preparo',
                'button'    =>  [
                    'step'              =>  'Passo'
                ]
            ],
            'financial'     =>  [
                'title'                     =>  'Financeiro',
                'sub_title'                 =>  'Etapa 4: Financeiro',
            ],
            'nutritional'   =>  [
                'title'             =>  'Nutricional',
                'sub_title'         =>  'Etapa 5: Tabela Nutricional',
            ],
            'finish'        =>  [
                'title'                     =>  'Finalizar',
                'sub_title'                 =>  'Etapa 6: Finalização',
            ]
        ]

    ]
];