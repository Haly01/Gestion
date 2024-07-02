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
        Schema::create('attendances', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 30);
            $table->string('last_name',30);
            $table->date('date');
            $table->time('hour');
            $table->timestamps();

            $table->integer('department_id')->unsigned();
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('employee_id')->unsigned();
            $table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendances');
    }
};
