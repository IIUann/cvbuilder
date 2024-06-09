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
        Schema::create('educations', function (Blueprint $table) {
            $table->id();
            $table->string( 'university_name')->nullable();
            $table->string( 'university_location')->nullable();
            $table->date( 'end_date')->nullable();
            $table->date( 'start_date')->nullable();
            $table->string( 'degree')->nullable();
            $table->string( 'feild_of_study')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('educations');
    }
};
