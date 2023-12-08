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
        Schema::create('applicants', function (Blueprint $table) {
            $table->id('appl_id');
            $table->unsignedBigInteger('dep_id');
            $table->foreign('dep_id')->references('id')->on('departments');
            $table->string('ap_name');
            $table->string('exp');
            $table->string('emailid');
            $table->string('phone_no');
            $table->string('current_org');
            $table->string('designation');
            $table->string('ctc');
            $table->string('notice');
            $table->string('expected_ctc');
            $table->string('comments');
            $table->string('resumelink');
            $table->string('department');
            $table->string('status');
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
