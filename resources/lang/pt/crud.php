<?php

return [
    'global'    =>  [
        'created_at'    =>  'Criado Em',
        'updated_at'    =>  'Atualizado Em',
        'next_step'     =>  'Próxima Etapa',
        'back'          =>  'Voltar',
        'need_help'     =>  'Precisa de Ajuda?'
    ],

    'company'   =>  [
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
            'price'                     =>  'Preço',
            'nutritional_information'   =>  'Informações Nutricionais',
            'seccondary_ingredients'    =>  'Ingredientes Secundários',
            'allergens'                 =>  'Alérgenos'
        ],
        'steps'     =>  [
            'info' => [
                'title'             => 'Informações',
                'sub_title'         => 'Etapa 1: Informações Básicas',
                'name'              => 'Nome do Ingrediente',
                'manufacturer'      => 'Fabricante',
                'supplier'          => 'Fornecedor',

                'price'             => 'Preço por Unidade',
                'price_info'        => 'Preço pago pela unidade deste ingrediente',

                'gross_weight'      => 'Peso Bruto',
                'gross_weight_info' => 'Peso antes de qualquer descarte ou limpeza do ingrediente',
                
                'net_weight'        => 'Peso Líquido',
                'net_weight_info'   => 'Peso do ingrediente após descarte ou limpeza',
                
                'loss'              => 'Perda',
                'loss_info'         => 'Peso perdido no processo de descarte ou limpeza',

                'price_kilo'        => 'Preço por Kg/L',
                'price_kilo_info'   => 'Preço pago por cada Kg/L',

                'correction_factor' => 'Fator de Correção',
                'correction_factor_info' => 'Número que indica a perda de peso que um alimento sofre durante o pré-preparo',
                
                'revenue'           => 'Rendimento',
                'revenue_info'      => 'Porcentagem aproveitada do ingrediente',

                'package'           => 'Embalagem',
                'package_info'      => 'Tipo de embalagem com que o ingrediente é comprado.'
            ],
            'nutritional' => [
                'title'             => 'Nutricional',
                'sub_title'         => 'Etapa 2: Tabela Nutricional',
                'modal_title'       => 'Adicionar Nutriente',
                'modal_nutrient'    => 'Nutriente',
                'modal_value'       => 'Valor',
                'modal_close'       => 'Fechar',
                'modal_add'         => 'Adicionar',
                'portion'           => 'Porção',
                'portion_info'      => 'Medida (porção)',
                'optional_nutrients'=> 'Nutrientes Opcionais'
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
                'custom'                =>  'Personalizado'
            ],
            'allergens'     =>  [
                'title'                     =>  'Alérgenos',
                'sub_title'                 =>  'Etapa 4: Alérgenos',
                'allergens'                 =>  'Alérgenos',
                'contain'                   =>  'Contém',
                'allergens_derivatives'     =>  'Contém Derivados',
                'derivatives'               =>  'Derivados',
                'maycontain'                =>  'Pode Conter',
                'ingredients'               =>  'Ingredientes'
            ],
            'finish'        =>  [
                'title'                     =>  'Finalizar',
                'sub_title'                 =>  'Etapa 5: Finalização',
            ]
        ]
    ]
];