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
        Schema::create('suara', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_paslon')->required();
            $table->foreign('id_paslon')->references('id')->on('paslon')->onDelete('cascade')->onUpdate('cascade')->required();

            $table->unsignedBigInteger('id_tps')->required();
            $table->foreign('id_tps')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade')->required();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suara');
    }
};
