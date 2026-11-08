<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('email', 100)
                ->nullable()
                ->unique()
                ->after('full_name');

            $table->timestamp('email_verified_at')
                ->nullable()
                ->after('email');

            $table->string('password', 255)
                ->nullable()
                ->after('email_verified_at');

            $table->rememberToken();

            $table->timestamp('updated_at')
                ->nullable()
                ->after('created_at');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropUnique('users_email_unique');

            $table->dropColumn([
                'email',
                'email_verified_at',
                'password',
                'remember_token',
                'updated_at',
            ]);
        });
    }
};