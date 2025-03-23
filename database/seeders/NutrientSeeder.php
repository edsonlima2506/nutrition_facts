<?php

namespace Database\Seeders;

use App\Models\Nutrient;
use Illuminate\Database\Seeder;

class NutrientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = $this->getList();

        foreach($list as $item) {
            Nutrient::updateOrCreate(['name' => data_get($item, 'name')], $item);
        }
    }

    /**
     * @return array
     */
    protected function getList(): array
    {
        return [
            [
                'name'      =>  'energy_value',
                'measure'   =>  'kcal',
                'optional'  =>  false
            ],
            [
                'name'      =>  'energy_value_kj',
                'measure'   =>  'kj',
                'optional'  =>  false
            ],
            [
                'name'      =>  'carbohydrates',
                'measure'   =>   'g',
                'optional'  =>  false
            ],
            [
                'name'      =>  'total_sugars',
                'measure'   =>   'g',
                'optional'  =>  false
            ],
            [
                'name'      =>  'added_sugars',
                'measure'   =>   'g',
                'optional'  =>  false
            ],
            [
                'name'      =>  'proteins',
                'measure'   =>   'g',
                'optional'  =>  false
            ],
            [
                'name'      =>  'total_fats',
                'measure'   =>   'g',
                'optional'  =>  false
            ],
            [
                'name'      =>  'saturated_fats',
                'measure'   =>   'g',
                'optional'  =>  false
            ],
            [
                'name'      =>  'trans_fats',
                'measure'   =>   'g',
                'optional'  =>  false
            ],
            [
                'name'      =>  'fibers',
                'measure'   =>   'g',
                'optional'  =>  false
            ],
            [
                'name'      =>  'sodium',
                'measure'   =>   'mg',
                'optional'  =>  false
            ],

            // OPTIONALS

            [
                'name'      =>  'acid_araquidonic',
                'measure'   =>  'g',
                'optional'  =>  true
            ],
            [
                'name'      =>  'acid_aspartic',
                'measure'   =>  'g',
                'optional'  =>  true
            ],
            [
                'name'      =>  'acid_docosaexaenoic',
                'measure'   =>  'mg',
                'optional'  =>  true
            ],
            [
                'name'      =>  'acid_eicosapentaenoic',
                'measure'   =>  'mg',
                'optional'  =>  true
            ],
            [
                'name'      =>  'acid_glutamic',
                'measure'   =>  'g',
                'optional'  =>  true
            ],
            [
                'name'      =>  'acid_linoleic',
                'measure'   =>  'g',
                'optional'  =>  true
            ],
            [
                'name'      =>  'acid_linolenic',
                'measure'   =>  'mg',
                'optional'  =>  true
            ],
            [
                'name'      =>  'acid_oleic',
                'measure'   =>  'g',
                'optional'  =>  true
            ],
            [
                'name'      =>  'acid_pantothenic',
                'measure'   =>  'mg',
                'optional'  =>  true
            ],
            [
                'name'      =>  'organic_acids',
                'measure'   =>  'g',
                'optional'  =>  true
            ],
            [
                'name'      =>  'alanine',
                'measure'   =>  'g',
                'optional'  =>  true
            ],
            [
                'name'      =>  'starch',
                'measure'   =>  'g',
                'optional'  =>  true
            ],
            [
                'name'      =>  'arginine',
                'measure'   =>  'g',
                'optional'  =>  true
            ],
            [
                'name'      =>  'catechin',
                'measure'   =>  'mg',
                'optional'  =>  true
            ],
            [
                'name'      =>  'calcium',
                'measure'   =>  'mg',
                'optional'  =>  true
            ],
            [
                'name'      =>  'ashes',
                'measure'   =>  'g',
                'optional'  =>  true
            ],
            [
                'name'      =>  'cystine',
                'measure'   =>  'g',
                'optional'  =>  true
            ],
            [
                'name'      =>  'chloride',
                'measure'   =>  'mg',
                'optional'  =>  true
            ],
            [
                'name'      =>  'copper',
                'measure'   =>  'mcg',
                'optional'  =>  true
            ],
            [
                'name'      =>  'cholesterol',
                'measure'   =>  'mg',
                'optional'  =>  true
            ],
            [
                'name'      =>  'choline',
                'measure'   =>  'mg',
                'optional'  =>  true
            ],
            [
                'name'      =>  'creatine',
                'measure'   =>  'g',
                'optional'  =>  true
            ],
            [
                'name'      =>  'chromium',
                'measure'   =>  'mcg',
                'optional'  =>  true
            ],
            [
                'name'      =>  'sulfur',
                'measure'   =>  'mg',
                'optional'  =>  true
            ],
            [
                'name'      =>  'erythritol',
                'measure'   =>  'g',
                'optional'  =>  true
            ],
            [
                'name'      =>  'ethanol',
                'measure'   =>  'g',
                'optional'  =>  true
            ],
            [
                'name'      =>  'phenylalanine',
                'measure'   =>  'g',
                'optional'  =>  true
            ],
            [
                'name'      =>  'iron',
                'measure'   =>  'mg',
                'optional'  =>  true
            ],
            [
                'name'      =>  'fluorine',
                'measure'   =>  'mg',
                'optional'  =>  true
            ],
            [
                'name'      =>  'phosphorus',
                'measure'   =>  'mg',
                'optional'  =>  true
            ],
            [
                'name'      =>  'galactose',
                'measure'   =>  'g',
                'optional'  =>  true
            ],
            [
                'name'      =>  'glycine',
                'measure'   =>  'g',
                'optional'  =>  true
            ],
            [
                'name'      =>  'glucose',
                'measure'   =>  'g',
                'optional'  =>  true
            ],
            [
                'name'      =>  'monounsaturated_fats',
                'measure'   =>  'g',
                'optional'  =>  true
            ],
            [
                'name'      =>  'polyunsaturated_fats',
                'measure'   =>  'g',
                'optional'  =>  true
            ],
            [
                'name'      =>  'histidine',
                'measure'   =>  'g',
                'optional'  =>  true
            ],
            [
                'name'      =>  'iodine',
                'measure'   =>  'mcg',
                'optional'  =>  true
            ],
            [
                'name'      =>  'isoleucine',
                'measure'   =>  'g',
                'optional'  =>  true
            ],
            [
                'name'      =>  'isomalt',
                'measure'   =>  'g',
                'optional'  =>  true
            ],
            [
                'name'      =>  'l_arginine',
                'measure'   =>  'mg',
                'optional'  =>  true
            ],
            [
                'name'      =>  'l_glutamine',
                'measure'   =>  'mg',
                'optional'  =>  true
            ],
            [
                'name'      =>  'lactitol',
                'measure'   =>  'g',
                'optional'  =>  true
            ],
            [
                'name'      =>  'lactose',
                'measure'   =>  'g',
                'optional'  =>  true
            ],
            [
                'name'      =>  'leucine',
                'measure'   =>  'g',
                'optional'  =>  true
            ],
            [
                'name'      =>  'luna',
                'measure'   =>  'g',
                'optional'  =>  true
            ],
            [
                'name'      =>  'magnesium',
                'measure'   =>  'mg',
                'optional'  =>  true
            ],
            [
                'name'      =>  'maltitol',
                'measure'   =>  'g',
                'optional'  =>  true
            ],
            [
                'name'      =>  'mannitol',
                'measure'   =>  'g',
                'optional'  =>  true
            ],
            [
                'name'      =>  'manganese',
                'measure'   =>  'mg',
                'optional'  =>  true
            ],
            [
                'name'      =>  'methionine',
                'measure'   =>  'g',
                'optional'  =>  true
            ],
            [
                'name'      =>  'molybdenum',
                'measure'   =>  'mcg',
                'optional'  =>  true
            ],
            [
                'name'      =>  'nucleotides',
                'measure'   =>  'mg',
                'optional'  =>  true
            ],
            [
                'name'      =>  'omega_3',
                'measure'   =>  'mg',
                'optional'  =>  true
            ],
            [
                'name'      =>  'omega_6',
                'measure'   =>  'g',
                'optional'  =>  true
            ],
            [
                'name'      =>  'omega_9',
                'measure'   =>  'g',
                'optional'  =>  true
            ],
            [
                'name'      =>  'polydextrose',
                'measure'   =>  'g',
                'optional'  =>  true
            ],
            [
                'name'      =>  'total_polyols',
                'measure'   =>  'g',
                'optional'  =>  true
            ],
            [
                'name'      =>  'potassium',
                'measure'   =>  'mg',
                'optional'  =>  true
            ],
            [
                'name'      =>  'proline',
                'measure'   =>  'g',
                'optional'  =>  true
            ],
            [
                'name'      =>  'retinol',
                'measure'   =>  'mg',
                'optional'  =>  true
            ],
            [
                'name'      =>  'selenium',
                'measure'   =>  'mcg',
                'optional'  =>  true
            ],
            [
                'name'      =>  'serine',
                'measure'   =>  'g',
                'optional'  =>  true
            ],
            [
                'name'      =>  'sorbitol',
                'measure'   =>  'g',
                'optional'  =>  true
            ],
            [
                'name'      =>  'tagatose',
                'measure'   =>  'g',
                'optional'  =>  true
            ],
            [
                'name'      =>  'taurine',
                'measure'   =>  'mg',
                'optional'  =>  true
            ],
            [
                'name'      =>  'tyrosine',
                'measure'   =>  'g',
                'optional'  =>  true
            ],
            [
                'name'      =>  'threonine',
                'measure'   =>  'g',
                'optional'  =>  true
            ],
            [
                'name'      =>  'tryptophan',
                'measure'   =>  'g',
                'optional'  =>  true
            ],
            [
                'name'      =>  'humidity',
                'measure'   =>  'g',
                'optional'  =>  true
            ],
            [
                'name'      =>  'valine',
                'measure'   =>  'g',
                'optional'  =>  true
            ],
            [
                'name'      =>  'vitamin_a',
                'measure'   =>  'mcg',
                'optional'  =>  true
            ],
            [
                'name'      =>  'vitamin_b1',
                'measure'   =>  'mg',
                'optional'  =>  true
            ],
            [
                'name'      =>  'vitamin_b12',
                'measure'   =>  'mcg',
                'optional'  =>  true
            ],
            [
                'name'      =>  'vitamin_b2',
                'measure'   =>   'mg',
                'optional'  =>  true
            ],
            [
                'name'      =>  'vitamin_b3',
                'measure'   =>   'mg',
                'optional'  =>  true
            ],
            [
                'name'      =>  'vitamin_b5',
                'measure'   =>  'mg',
                'optional'  =>  true
            ],
            [
                'name'      =>  'vitamin_b6',
                'measure'   =>   'mg',
                'optional'  =>  true
            ],
            [
                'name'      =>  'vitamin_b7',
                'measure'   =>   'mcg',
                'optional'  =>  true
            ],
            [
                'name'      =>  'vitamin_b9',
                'measure'   =>   'mcg',
                'optional'  =>  true
            ],
            [
                'name'      =>  'vitamin_c',
                'measure'   =>  'mg',
                'optional'  =>  true
            ],
            [
                'name'      =>  'vitamin_d',
                'measure'   =>  'mcg',
                'optional'  =>  true
            ],
            [
                'name'      =>  'vitamin_e',
                'measure'   =>  'mg',
                'optional'  =>  true
            ],
            [
                'name'      =>  'vitamin_k',
                'measure'   =>  'mcg',
                'optional'  =>  true
            ],
            [
                'name'      =>  'xylitol',
                'measure'   =>  'g',
                'optional'  =>  true
            ],
            [
                'name'      =>  'zinc',
                'measure'   =>  'mg',
                'optional'  =>  true
            ]
        ];
    }
}
