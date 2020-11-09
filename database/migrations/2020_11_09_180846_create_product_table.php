<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Product', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->nullable(false)->unique();
            $table->string('description', 500)->nullable(false);
            $table->string('imgurl')->nullable(false);
            $table->float('price')->nullable(false);
            $table->float('discountPercent');
            $table->datetime('discountStart_at');
            $table->datetime('discountEnd_at');
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
        Schema::dropIfExists('Product');
    }
}
