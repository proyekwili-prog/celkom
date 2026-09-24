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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('role',['admin','operator']);
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });

        // TAMBAHAN: Skema Tabel Profile Sekolah
        Schema::create('profile_sekolahs', function (Blueprint $table) {
            $table->id('id_profil');
            $table->string('nama_sekolah');
            $table->string('kepala_sekolah')->nullable();
            $table->string('foto')->nullable();
            $table->string('logo')->nullable();
            $table->string('npsn');
            $table->text('alamat');
            $table->string('kontak')->nullable();
            $table->text('visi_misi')->nullable();
            $table->string('tahun_berdiri')->nullable();
            $table->text('deskripsi')->nullable();
            $table->text('visi')->nullable(); // <-- Tambahkan ini
            $table->text('misi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profile_sekolahs');
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
