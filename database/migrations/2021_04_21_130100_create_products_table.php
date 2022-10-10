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
            $table->id();

             $table->string('name')->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('subcategory_id')->nullable();
            $table->integer('subundercategory_id')->nullable();
            $table->text('short_description')->nullable();
            $table->text('description')->nullable();
            $table->string('banner')->nullable();
            $table->string('image')->nullable();
            $table->string('attribute_id')->nullable();
    
             $table->string('quantity')->nullable();
             $table->string('mp')->nullable();
             $table->string('sp')->nullable();
            $table->string('favicon')->nullable();
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->integer('weight')->nullable();
            $table->boolean('status')->nullable();
            $table->string('slug')->nullable();

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
}
