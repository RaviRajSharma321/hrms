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
        Schema::create('salary', function (Blueprint $table) {
            $table->id('sal_id');
            $table->unsignedBigInteger('a_id');
            $table->foreign('a_id')->references('a_id')->on('attendence');
            $table->unsignedBigInteger('emp_id');
            $table->foreign('emp_id')->references('id')->on('per_dtls');
            $table->string('month');
            $table->string('salary');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
