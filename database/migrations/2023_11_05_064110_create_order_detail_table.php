<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('order_detail', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_order');
            $table->unsignedBigInteger('id_product_detail');
            $table->integer('quantity');
            $table->string('size');
            $table->decimal('price', 10, 2);
            $table->string('status');
            $table->timestamps();

            $table->unique(['id_order', 'id_product_detail']);
            
            $table->foreign('id_order')
            ->references('id')->on('order')->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('id_product_detail')
            ->references('id')->on('product_detail')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_detail');
    }
};
