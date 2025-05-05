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
        Schema::create('qa', function (Blueprint $table) {
            $table->bigIncrements('qa_id');
            $table->unsignedBigInteger('qa_section_id');
            $table->string('qa_title');
            $table->text('qa_text');
            $table->boolean('qa_active')->default(true);
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
