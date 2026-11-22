
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

            // IDENTITAS PENGGUNA
            $table->string('name');
            $table->string('email')->unique();

            // AUTENTIKASI
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

            // ROLE / HAK AKSES
            $table->enum('role', [
                'administrator',
                'admin',
                'editor',
                'viewer',
            ])->default('viewer');

            // STATUS AKUN
            $table->boolean('is_active')->default(true);

            // REMEMBER LOGIN
            $table->rememberToken();

            // TIMESTAMPS
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
