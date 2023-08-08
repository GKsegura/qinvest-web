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
            $table->bigIncrements('id_user');
            $table->string('email', 100)->unique();
            $table->string('username', 150);
            $table->string('password');
            $table->string('gender');
            $table->timestamp('create_time');
            $table->timestamp('update_time')->nullable();
            $table->boolean('newsletter');
			$table->boolean('terms_user');
            $table->date('birth_time');
            $table->boolean('deleted');
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