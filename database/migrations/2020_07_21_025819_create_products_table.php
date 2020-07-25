<?php

use App\Product;
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
            $table->string('size');
            $table->string('unit_of_measure');
            $table->string('name');
            $table->string('type');
            $table->string('manufacturer');
            $table->text('blurb');
            $table->text('description');
            $table->integer('quantity')->unsigned();
            $table->string('status')->default(Product::UNAVAILABLE_PRODUCT);
            $table->string('image');
            $table->string('sku');
            $table->string('vendor_sku');
            $table->double('original_price', 8, 2)->default(0.00);
            $table->double('current_price', 8, 2)->default(0.00);
            $table->boolean('backorderable')->default(true);
            $table->boolean('taxable')->default(true);
            $table->boolean('on_sale')->default(false);
            $table->double('on_sale_percentage', 8, 2)->default(0.0);
            $table->integer('number_of_sales')->default(0);
            $table->integer('number_of_views')->default(0);
            $table->boolean('featured')->default('false');
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
