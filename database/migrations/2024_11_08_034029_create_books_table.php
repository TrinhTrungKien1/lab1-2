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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title',255);
            $table->string('thumbnail',255)->nullable();
            $table->string('author',255)->nullable();
            $table->string('publisher',255)->nullable();
            $table->dateTime('Publication')->nullable();
            $table->double('Price');
            $table->integer('Quantity');
            $table->foreignId('Category_id');
            $table->foreign('Category_id')->references('id')->on('categories');
            $table->timestamps();

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
