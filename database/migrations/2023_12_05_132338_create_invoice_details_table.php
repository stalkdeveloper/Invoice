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
        Schema::create('invoice_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('invoice_id')->nullable();
            $table->string('item_name')->nullable();
            $table->longText('description')->nullable();
            $table->string('gst')->nullable();
            $table->string('quantity')->nullable();
            $table->decimal('rate', 16, 2)->nullable();
            $table->decimal('amount', 16, 2)->nullable();
            $table->string('igst')->nullable();
            $table->decimal('total', 16, 2)->nullable();
            $table->string('thumbnail')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('invoice_id')->references('id')->on('invoices')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice_details');
    }
};
