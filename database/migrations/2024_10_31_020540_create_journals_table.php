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
    Schema::create('journals', function (Blueprint $table) {
        $table->id();
        $table->string('judul_journal');
        $table->string('penulis');
        $table->string('penerbit');
        $table->text('deskripsi');
        $table->bigInteger('tahun_terbit');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('journals');
    }
};
