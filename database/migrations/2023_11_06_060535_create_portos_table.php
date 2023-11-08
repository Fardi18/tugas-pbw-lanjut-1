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
        Schema::create('portos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->date('tanggal');
            $table->string('description');
            $table->foreignId('portocategory_id');
            $table->foreign('portocategory_id')->references('id')->on('porto_categories')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portos');
    }
};
