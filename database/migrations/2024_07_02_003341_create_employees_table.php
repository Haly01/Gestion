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
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 30);
            $table->string('last_name',30);
            $table->string('age', 3);
            $table->string('gender', 10);
            $table->string('email', 100);
            $table->string('phone', 20);
            $table->float('salary', 10,2);
            $table->string('address', 100);
            $table->string('identification_card', 14)->unique();

            $table->integer('department_id')->unsigned();
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
