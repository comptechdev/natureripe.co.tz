<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->uuid("product_id");
            $table->string("name");
            $table->string("featured_image")->nullable();
            $table->text("description")->nullable();
            $table->string("nutrition_unit")->nullable();
            $table->string("nutrition_calories")->nullable();
            $table->string("nutrition_total_fat")->nullable();
            $table->string("nutrition_saturated_fat")->nullable();
            $table->string("nutrition_trans_fat")->nullable();
            $table->string("nutrition_cholesterol")->nullable();
            $table->string("nutrition_sodium")->nullable();
            $table->string("nutrition_carbohydrates")->nullable();
            $table->string("nutrition_dietary_fiber")->nullable();
            $table->string("nutrition_sugers")->nullable();
            $table->string("nutrition_protein")->nullable();
            $table->string("nutrition_vitamin_c")->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('products');
    }
};
