<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngredientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('manufacturer')->nullable();
            $table->string('supplier')->nullable();
            $table->decimal('unit_price', 8, 2)->nullable();
            $table->integer('gross_weight')->nullable();
            $table->integer('net_weight')->nullable();
            $table->integer('loss')->nullable();
            $table->decimal('price_kilo', 8, 2)->nullable();
            $table->decimal('correction_factor', 5, 2)->nullable();
            $table->decimal('revenue', 8, 2)->nullable();
            $table->string('package')->nullable();
            $table->integer('portion')->nullable();
            $table->json('nutritional_values')->nullable();
            $table->string('ingredient_gluten')->nullable();
            $table->string('ingredient_lactose')->nullable();
            $table->json('ingredient_allergens')->nullable();
            $table->boolean('ingredient_allergens_has_derivatives')->default(false);
            $table->json('ingredient_allergens_derivatives')->nullable();
            $table->json('ingredient_allergens_maycontain')->nullable();
            $table->json('seccondary_ingredients')->nullable();

            $table->json('closed_storage_place')->nullable();
            $table->string('closed_storage_place_custom')->nullable();
            $table->json('closed_storage_temperature')->nullable();
            $table->string('closed_storage_temperature_custom')->nullable();

            $table->json('opened_storage_place')->nullable();
            $table->string('opened_storage_place_custom')->nullable();
            $table->json('opened_storage_temperature')->nullable();
            $table->string('opened_storage_temperature_custom')->nullable();

            $table->foreignId('company_id')
                ->constrained()
                ->onDelete('CASCADE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingredients');
    }
}
