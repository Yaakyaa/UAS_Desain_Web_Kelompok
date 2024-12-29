<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('laporans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mahasiswa_id')->constrained('mahasiswas')
            ->onDelete('cascade');
            $table->string('judul');
            $table->text('laporan');
            $table->enum('status', ['disetujui', 'ditolak', 'revisi'])->default('revisi');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('laporans');
    }
    
};
