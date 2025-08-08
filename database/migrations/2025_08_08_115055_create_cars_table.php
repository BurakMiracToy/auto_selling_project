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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->unsigned();
            $table->unsignedBigInteger('model_id')->unsigned();
            $table->unsignedBigInteger('tramer_id')->unsigned();
            $table->unsignedBigInteger('town_id');
            $table->year('year');
            $table->string('color');
            $table->integer('km');
            $table->boolean('warranty')->default(0)->comment('0 - garantisiz,1 - garantili');
            $table->tinyInteger('vites')->comment('0-manuel,1-yarıotomatik,2-otomatik');
            $table->tinyInteger('fuel')->comment('0-dizel,1-benzin,2-tüp,3-elektrik');
            $table->text('description');
            $table->tinyInteger('status')->comment('0-inaktif,1-aktif,2-satıldı');
            $table->integer('price');


            $table->softDeletes();
            $table->timestamps();


            $table->foreign('user_id')
                ->on('users')
                ->references('id')
                ->onDelete('cascade');

            $table->foreign('model_id')
                ->on('car_brand_models')
                ->references('id')
                ->onDelete('cascade');

            $table->foreign('tramer_id')
                ->on('car_tramers')
                ->references('id')
                ->onDelete('cascade');

            $table->foreign('town_id')
                ->on('towns')
                ->references('id')
                ->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
};
