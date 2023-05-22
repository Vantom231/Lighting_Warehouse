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
        Schema::table('users', function (Blueprint $table) {
            $table->char('account_type',1);
            $table->string('first_name');
            $table->string('last_name');
            $table->string('pesel',11)->unique();
            $table->string('mailing_address');
            $table->string('comapny_name')->nullable();
            $table->string('nip',10)->unique()->nullable();
            $table->string('company_address')->nullable();
            $table->string('company_mailing_address')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['account_type']);
            $table->dropColumn(['first_name']);
            $table->dropColumn(['last_name']);
            $table->dropColumn(['pesel']);
            $table->dropColumn(['mailing_address']);
            $table->dropColumn(['comapny_name']);
            $table->dropColumn(['nip']);
            $table->dropColumn(['company_address']);
            $table->dropColumn(['company_mailing_address']);
        });
    }
};
