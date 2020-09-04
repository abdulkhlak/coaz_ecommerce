<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->unsignedBigInteger('cat_id');
            $table->unsignedBigInteger('brand_id')->nullable();
            $table->unsignedBigInteger('color_id')->nullable();
            $table->unsignedBigInteger('size_id')->nullable();
            $table->unsignedBigInteger('tags_id')->nullable();
            $table->string('product_name');
            $table->string('product_slug')->unique();
            $table->longText('description')->nullable();
            $table->decimal('regular_price','10','2');
            $table->decimal('sale_price','10','2')->nullable();
            $table->date('sale_date_start')->nullable();
            $table->date('sale_date_end')->nullable();
            $table->string('product_model')->nullable();
            $table->string('product_code')->nullable();
            $table->integer('product_status')->nullable();
            $table->string('product_weight')->nullable();
            $table->longText('product_description')->nullable();
            $table->tinyInteger('warranty')->default('0');
            $table->string('warranty_duration')->nullable();
            $table->longText('warranty_condition')->nullable();
            $table->string('video_url')->nullable();
            $table->string('featured_image')->nullable();
            $table->string('product_gallery')->nullable();
            $table->enum('status',['1','0'])->default('1');
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
