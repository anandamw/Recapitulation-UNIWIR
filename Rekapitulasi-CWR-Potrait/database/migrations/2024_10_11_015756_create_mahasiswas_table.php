<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mahasiswas', function (Blueprint $table) {

            $table->string('npm')->charset('utf8mb4')->collate('utf8mb4_unicode_ci')->nullable();
            $table->string('nama')->charset('utf8mb4')->collate('utf8mb4_unicode_ci')->nullable();
            $table->string('prodi')->charset('utf8mb4')->collate('utf8mb4_unicode_ci')->nullable();
            $table->string('jkel')->charset('utf8mb4')->collate('utf8mb4_unicode_ci')->nullable();
            $table->string('tmp_lahir')->charset('utf8mb4')->collate('utf8mb4_unicode_ci')->nullable();
            $table->string('tgl_lahir')->charset('utf8mb4')->collate('utf8mb4_unicode_ci')->nullable();
            $table->string('alamat')->charset('utf8mb4')->collate('utf8mb4_unicode_ci')->nullable();
            $table->string('tlpn')->charset('utf8mb4')->collate('utf8mb4_unicode_ci')->nullable();
            $table->string('email')->charset('utf8mb4')->collate('utf8mb4_unicode_ci')->nullable();
            $table->text('judul_ta')->charset('utf8mb4')->collate('utf8mb4_unicode_ci')->nullable();
            $table->string('kesan')->charset('utf8mb4')->collate('utf8mb4_unicode_ci')->nullable();
            $table->string('pesan')->charset('utf8mb4')->collate('utf8mb4_unicode_ci')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};
