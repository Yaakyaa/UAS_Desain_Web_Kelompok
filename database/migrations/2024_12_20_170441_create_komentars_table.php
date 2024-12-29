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
        Schema::create('komentars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('laporan_id')->nullable()->constrained('laporans');
            $table->foreignId('log_kegiatan_id')->nullable()->constrained('log_kegiatans');
            $table->text('komentar');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('komentars');
    }
    
};
