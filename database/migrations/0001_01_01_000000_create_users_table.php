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
        // Membuat tabel 'users' untuk menyimpan data pengguna
        Schema::create('users', function (Blueprint $table) {
            $table->id();  // Kolom ID
            $table->string('name');  // Nama pengguna
            $table->string('email')->unique();  // Email yang harus unik
            $table->timestamp('email_verified_at')->nullable();  // Waktu verifikasi email
            $table->string('password');  // Password pengguna
            $table->rememberToken();  // Token untuk 'remember me'
            $table->timestamps();  // Kolom created_at dan updated_at
        });

        // Membuat tabel 'password_reset_tokens' untuk menyimpan token reset password
        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();  // Email pengguna yang meminta reset
            $table->string('token');  // Token reset password
            $table->timestamp('created_at')->nullable();  // Waktu pembuatan token
        });

        // Membuat tabel 'sessions' untuk menyimpan data sesi pengguna
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();  // ID sesi
            $table->foreignId('user_id')->nullable()->index();  // Relasi ke tabel users
            $table->string('ip_address', 45)->nullable();  // Alamat IP pengguna
            $table->text('user_agent')->nullable();  // User agent dari browser
            $table->longText('payload');  // Payload data sesi
            $table->integer('last_activity')->index();  // Waktu terakhir aktivitas
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Menghapus tabel-tabel yang telah dibuat
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
