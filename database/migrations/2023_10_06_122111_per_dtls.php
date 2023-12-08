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
        Schema::create('per_dtls', function (Blueprint $table) {
            $table->id('eid');
            $table->unsignedBigInteger('dep_id');
            $table->foreign('dep_id')->references('id')->on('departments');
            $table->string('ename');
            $table->string('gender');
            $table->string('experience');
            $table->string('p_email');
            $table->string('comp_email');
            $table->string('phone');
            $table->date('dob');
            $table->string('staddress');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('per_dtls');
    }
};
