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
        Schema::create('nilais', function (Blueprint $table) {
            $table->id();
            $table->string('nama');//relasi nama murid
            $table->string('kelas');//relasi kelas
            $table->string('semester');
            $table->string('nilai_uts');//relasi 
            $table->string('nilai_uas');//relasi 
            $table->string('nilai_tugas');//relasi 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilai');
    }
};
