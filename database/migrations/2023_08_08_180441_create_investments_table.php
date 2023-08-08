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
        Schema::create('Investment', function (Blueprint $table) {
            $table->string('cod_investment')->primary();
            $table->unsignedBigInteger('fk_investor');
            $table->string('name_investment');
            $table->string('description');
            $table->decimal('profitability', 10, 2);
            $table->foreign('fk_investor')->references('id_investor')->on('investor');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('investments');
    }
};
