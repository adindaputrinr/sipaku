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
        Schema::create('rules', function (Blueprint $table) {
            $table->id();
            $table->string('kodeRule');
            $table->string('kodeGejala');
            $table->string('kodePenyakit');
            $table->timestamps();

            $table->foreign('kodeGejala')->references('kodeGejala')->on('gejalas');
            $table->foreign('kodePenyakit')->references('kodePenyakit')->on('penyakits');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rules');
    }
};
