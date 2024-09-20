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
        Schema::create('students', function (Blueprint $table) {
            $table->int('stu_id');
            $table->string('name',30);
            $table->string('email',15)->unique()->nullable();
            $table->float('percentage',3,2)->comment('student percentage');
            $table->primary('stu_id');
            $table->string('country')->default('india');
            $table->int('age')->unsigned();   //unsigned ->mean user do not put negative ot positive value
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');  //when we use rollback then this function call and delete table
    }
};
