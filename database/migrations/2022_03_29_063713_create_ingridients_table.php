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
        Schema::create('ingridients', function (Blueprint $table) {
            $table->id();
            $table->uuid("ingridient_id");
            $table->unsignedBigInteger("ingridientable_id")->nullable();
            $table->unsignedBigInteger("ingridientable_type")->nullable();
            $table->unsignedBigInteger("product_id")->nullable();
            $table->string("name");
            $table->string("feature_image");
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
        Schema::dropIfExists('ingridients');
    }
};
