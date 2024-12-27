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
            'info'          =>  [
                'title'         =>  'Informações',
                'sub_title'     =>  'Etapa 1: Informações Básicas',
                'name'          =>  'Nome do Ingrediente',
                'manufacturer'  =>  'Fabricante',
                'price'         =>  'Preço',
            ],
            'nutritional'   =>  [
                'title'         =>  'Nutricional',
                'sub_title'     =>  'Etapa 2: Tabela Nutricional',
                'modal_title'   =>  'Adicionar Nutriente',
                'modal_nutrient'   =>  'Nutriente',
                'modal_close'   =>  'Fechar',
                'modal_add'     =>  'Adicionar'
            ],
            'ingredients'   =>  [
                'title'         =>  'Ingredientes',
                'sub_title'     =>  'Etapa 3: Ingredientes',
                'ingredients'   =>  'Ingredientes',
            ],
            'allergens'     =>  [
                'title'                     =>  'Alérgenos',
                'sub_title'                 =>  'Etapa 4: Alérgenos',
                'allergens'                 =>  'Alérgenos',
                'contain'                   =>  'Contém',
                'allergens_derivatives'     =>  'Contém Derivados',
                'derivatives'               =>  'Derivados',
                'maycontain'                =>  'Pode Conter'
            ],
            'save'          =>  'Guardar'
        ]
    ]
];