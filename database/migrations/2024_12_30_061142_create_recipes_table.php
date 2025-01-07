<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('company_id')->nullable()
                ->constrained()
                ->onDelete('CASCADE');
            $table->foreignId('recipe_category_id')
                ->constrained()
                ->onDelete('CASCADE');
            $table->integer('portions');
            $table->string('portion_unit');
            $table->string('preparation_time');
            $table->decimal('weight', 8, 2);
            $table->string('weight_unit');
            $table->string('description')->nullable();
            
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
        Schema::dropIfExists('recipes');
    }
}
