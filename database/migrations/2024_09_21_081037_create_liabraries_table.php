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
        Schema::create('liabraries', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('stu_id');
            // $table->foreign('stu_id')
            //       ->references('id')
            //       ->on('students')   //after delete student id it show cascade
            //       ->onUpdate('cascade')
            //       ->onDelete('cascade');
            
            // in that place we can write this in short way
            $table->foreignId('student_id')->constrained()
                  ->casecadeOnUpdate()->cascadeOnDelete();
                  
            $table->string('Book');
            $table->date('due_date')->nullable();
            $table->boolean('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('liabraries');
    }
};
