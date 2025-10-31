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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->decimal('total', 22, 4)->default(0);
            $table->decimal('discount', 22, 4)->default(0);
            $table->decimal('vat', 22, 4)->default(0);
            $table->decimal('payable', 22, 4)->default(0);
            $table->foreignId('user_id');
            $table->foreignId('customer_id');
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('restrict');

            $table->foreign('customer_id')
                ->references('id')
                ->on('customers')
                ->onUpdate('cascade')
                ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
