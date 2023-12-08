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
        Schema::create('documents', function (Blueprint $table) {
            $table->id('docs_id');
            $table->unsignedBigInteger('emp_id');
            $table->foreign('emp_id')->references('id')->on('per_dtls');
            $table->string('pd_name');
            $table->string('per_docs',255);
            $table->string('od_name');
            $table->string('office-docs',255);
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
