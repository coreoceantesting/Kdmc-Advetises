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
        Schema::table('hoarding_permissions', function (Blueprint $table) {
            $table->string('qr_path')->after('application_no')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('hoarding_permissions', function (Blueprint $table) {
            $table->dropColumn('qr_path');
        });
    }
};
