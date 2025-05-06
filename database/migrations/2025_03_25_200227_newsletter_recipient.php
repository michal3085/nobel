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
        Schema::create('newsletter_recipient', function (Blueprint $table) {
            $table->bigIncrements('newsletter_recipient_id');
            $table->unsignedBigInteger('newsletter_id');
            $table->unsignedBigInteger('newsletter_subscribers_id');
            $table->text('newsletter_send_status');
            $table->timestamp('sent_at')->nullable();
            $table->timestamps();

            $table->foreign('newsletter_id')->references('newsletter_id')->on('newsletter')->onDelete('cascade');
            $table->foreign('newsletter_subscribers_id')->references('newsletter_subscribers_id')->on('newsletter_subscribers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('newsletter_recipient');
    }
};
