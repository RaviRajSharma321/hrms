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
        Schema::create('emp_dtls', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('emp_id');
            $table->foreign('emp_id')->references('id')->on('per_dtls');
            $table->string('employment_type');
            $table->string('designation');
            $table->date('doj');
            $table->string('salaryatj');
            $table->string('appraiseldue');
            $table->date('dateonextappr');
            $table->string('agre_drtn');
            $table->string('comments');
            $table->string('referencedby');
            $table->string('status');
            $table->string('issecded');
            $table->string('sec_amnt');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

    }
};
