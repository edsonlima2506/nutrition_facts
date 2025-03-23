<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Ingredient;

class IngredientSeeder extends Seeder
{
    public function run()
    {
        
        $ingredients = [
            [
                'name' => 'Tomate',
                'manufacturer' => 'Indústria do Tomate',
                'supplier' => 'Alimentos Frescos Ltda.',
                'unit_price' => 2.50,
                'gross_weight' => 0.5,
                'price_kilo' => 3.00,
                'package' => 'https://picsum.photos/id/102/300/200', // Imagem gratuita do Unsplash
                'company_id' => 1,
            ],
            [
                'name' => 'Cebola',
                'manufacturer' => 'Cebolas do Brasil',
                'supplier' => 'Verduras do Campo',
                'unit_price' => 1.75,
                'gross_weight' => 0.3,
                'price_kilo' => 2.20,
                'package' => 'https://picsum.photos/id/102/300/200', // Imagem gratuita do Unsplash
                'company_id' => 1,
            ],
            [
                'name' => 'Alho',
                'manufacturer' => 'Alho Fresco',
                'supplier' => 'Especiarias Ltda.',
                'unit_price' => 0.99,
                'gross_weight' => 0.1,
                'price_kilo' => 1.50,
                'package' => 'https://picsum.photos/id/102/300/200', // Imagem gratuita do Unsplash
                'company_id' => 1,
            ],
            [
                'name' => 'Pepino',
                'manufacturer' => 'Fazenda Verde',
                'supplier' => 'Legumes e Verduras',
                'unit_price' => 1.20,
                'gross_weight' => 0.4,
                'price_kilo' => 1.80,
                'package' => 'https://picsum.photos/id/102/300/200', // Imagem gratuita do Unsplash
                'company_id' => 1,
            ],
            [
                'name' => 'Alface',
                'manufacturer' => 'Alface Fresca Ltda.',
                'supplier' => 'Hortifruti Verde',
                'unit_price' => 2.00,
                'gross_weight' => 0.25,
                'price_kilo' => 2.50,
                'package' => 'https://picsum.photos/id/102/300/200', // Imagem gratuita do Unsplash
                'company_id' => 1,
            ],
            [
                'name' => 'Batata',
                'manufacturer' => 'Fazenda das Batatas',
                'supplier' => 'Agronegócio Verde',
                'unit_price' => 3.00,
                'gross_weight' => 1.0,
                'price_kilo' => 3.50,
                'package' => 'https://picsum.photos/id/102/300/200', // Imagem gratuita do Unsplash
                'company_id' => 1,
            ],
            [
                'name' => 'Cenoura',
                'manufacturer' => 'Cenouras Brasil',
                'supplier' => 'Verduras do Campo',
                'unit_price' => 2.30,
                'gross_weight' => 0.6,
                'price_kilo' => 2.80,
                'package' => 'https://picsum.photos/id/102/300/200', // Imagem gratuita do Unsplash
                'company_id' => 1,
            ],
            [
                'name' => 'Brócolis',
                'manufacturer' => 'Fazenda Verde',
                'supplier' => 'Hortifruti Nacional',
                'unit_price' => 4.00,
                'gross_weight' => 0.7,
                'price_kilo' => 4.50,
                'package' => 'https://picsum.photos/id/102/300/200', // Imagem gratuita do Unsplash
                'company_id' => 1,
            ],
            [
                'name' => 'Abobrinha',
                'manufacturer' => 'Hortas do Campo',
                'supplier' => 'Alimentos Naturais',
                'unit_price' => 1.80,
                'gross_weight' => 0.4,
                'price_kilo' => 2.20,
                'package' => 'https://picsum.photos/id/102/300/200', // Imagem gratuita do Unsplash
                'company_id' => 1,
            ],
            [
                'name' => 'Beterraba',
                'manufacturer' => 'Beterraba do Brasil',
                'supplier' => 'Alimentos Frescos',
                'unit_price' => 2.50,
                'gross_weight' => 0.5,
                'price_kilo' => 3.00,
                'package' => 'https://picsum.photos/id/102/300/200', // Imagem gratuita do Unsplash
                'company_id' => 1,
            ],
        ];
        
        foreach ($ingredients as $ingredient) {
            Ingredient::create($ingredient);
        }
    }
}