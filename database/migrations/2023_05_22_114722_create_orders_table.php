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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->datetime('post_date');
            $table->datetime('accept_date')->nullable();
            $table->datetime('send_date')->nullable();
            $table->boolean('finished');
            $table->boolean('deliver');
            $table->string('deliver_address')->nullable();
            $table->boolean('invoice');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
