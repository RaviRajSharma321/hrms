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
        Schema::create('bank_dtls', function (Blueprint $table) {
            $table->id('bank_id');
            $table->unsignedBigInteger('emp_id');
            $table->foreign('emp_id')->references('id')->on('per_dtls');
            $table->string('bankname',191);
            $table->string('ifsccode',191);
            $table->string('acnumber',191);
            $table->string('acholdername',191);
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
