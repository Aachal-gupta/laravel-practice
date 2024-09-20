<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations command .
     */
    public function up(): void
    {
        Schema::table('students', function (Blueprint $table) {
            // column will be added name city
            // $table->string('city',30);   //30 is a size of string, we can take any data type
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('students', function (Blueprint $table) {
            //
        });
    }
};
