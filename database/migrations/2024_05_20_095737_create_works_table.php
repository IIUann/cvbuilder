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
        Schema::create('works', function (Blueprint $table) {
            $table->id();
            $table->string('work_experience')->nullable();
            $table->string( 'position')->nullable();
            $table->string( 'company_name')->nullable();
            $table->string( 'city')->nullable();
            $table->string( 'summary')->nullable();
            $table->date( 'start_date')->nullable();
            $table->date( 'end_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('works');
    }
};
