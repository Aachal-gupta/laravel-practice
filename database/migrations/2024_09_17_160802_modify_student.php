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
        Schema::table('students', function (Blueprint $table) {
             //Rename column
            //  $table->renameColumn('cities','city'); //if our mysql version is greater than 10 sthan only
            
            //  remove column
            // $table->dropColumn('name'); //it will not work

            //change size and take default value if user not put the value in that column
            //  $table->string('email',40)->default('No email')->change(); // not work
          

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
