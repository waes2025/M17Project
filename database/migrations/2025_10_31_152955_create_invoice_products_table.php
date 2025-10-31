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
        Schema::create('invoice_products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('invoice_id');
            $table->foreignId('product_id');
            $table->foreignId('user_id');
            $table->decimal('qty', 22, 4)->default(0);
            $table->decimal('sale_price', 22, 4)->default(0);
            $table->timestamps();

            $table->foreign('invoice_id')
                ->references('id')
                ->on('invoices')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('product_id')
                ->references('id')
                ->on('products')
                ->onUpdate('cascade')
                ->onDelete('restrict');

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice_products');
    }
};
