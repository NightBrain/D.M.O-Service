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
        Schema::create('srepair', function (Blueprint $table) {
            $table->id();
            $table->string('nickname_c');
            $table->integer('phonenumber_c');
            $table->string('devices_c');
            $table->string('problem_c');
            $table->string('status_t');
            $table->string('time_receive_t');
            $table->string('time_return_t');
            $table->string('nickname_t');
            $table->integer('phonenumber_t');
            $table->string('advice_t');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('srepair');
    }
};
