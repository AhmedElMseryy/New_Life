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
        Schema::create('ranks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name'); // اسم الرتبة
            $table->integer('prize'); // الجائزة
            $table->integer('bv_left'); // BV Left
            $table->integer('bv_right'); // BV Right
            $table->string('image')->nullable(); // الصورة
            $table->text('description')->nullable(); // الوصف
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ranks');
    }
};
