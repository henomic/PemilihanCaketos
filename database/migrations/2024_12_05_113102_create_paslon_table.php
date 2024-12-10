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
        Schema::create('paslon', function (Blueprint $table) {
            $table->id();
            $table->string('no_paslon');
            $table->string('nama_ketua');
            $table->string('nama_wakil');
            
            $table->text('foto');
            $table->text('visi');
            $table->text('misi');
            $table->string('jargon');
            $table->string('vid');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paslon');
    }
};
