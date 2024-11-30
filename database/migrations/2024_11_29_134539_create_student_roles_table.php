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
        Schema::create('student_roles', function (Blueprint $table) {
            $table->foreignId('student_id') // this column is foreign id  of the student table  
                    ->references('id') 
                    ->on('students')
                    ->cascadeOnDelete();

            $table->foreignId('role_id')  //this column is refere froms role table
                    ->references('id')
                    ->on('roles')
                    ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_roles');
    }
};
