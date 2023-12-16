<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('product_name');
            $table->unsignedBigInteger('cat_id');
//            $table->string('code');
            $table->string('img');
            $table->integer('gender');
            $table->integer('rating');
            $table->integer('sold');
            $table->text('desc');
            $table->integer('price');
            $table->foreign('cat_id')->references('id')
                ->on('categories')
//                ->onUpdate('CASCADE')
//                ->onDelete('SET NULL');
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
        Schema::dropIfExists('products');
    }
}
