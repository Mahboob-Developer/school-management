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
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('class_id')->constrained()->onDelete('cascade');
            $table->foreignId('academic_year_id')->constrained()->onDelete('cascade');
            $table->string('admission_date')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('mobno')->nullable();
            $table->string('dob')->nullable();

        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('class_id');
        Schema::dropIfExists('academic_year_id');
        Schema::dropIfExists('admission_date');
        Schema::dropIfExists('father_name');
        Schema::dropIfExists('mother_name');
        Schema::dropIfExists('mobno');
        Schema::dropIfExists('dob');




        
    }
};
