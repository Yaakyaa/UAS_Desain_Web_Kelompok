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
    Schema::create('proposals', function (Blueprint $table) {
        $table->id();
        $table->string('judul');
        $table->text('deskripsi');
        $table->foreignId('mahasiswa_id')->constrained('mahasiswas')
        ->onDelete('cascade');
        $table->enum('status', ['belum diisi', 'disetujui', 'ditolak', 'revisi'])->default('belum diisi');
        $table->string('file')->nullable();
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('proposals');
}

};
