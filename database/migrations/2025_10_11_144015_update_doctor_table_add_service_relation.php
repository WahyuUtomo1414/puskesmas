<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('doctor', function (Blueprint $table) {
            $table->string('image', 128)->nullable()->change();
            $table->foreignId('id_service')
                ->nullable()
                ->constrained('service');
        });
    }

    public function down(): void
    {
        Schema::table('doctor', function (Blueprint $table) {
            $table->string('image', 128)->nullable(false)->change();
            $table->dropForeign(['id_service']);
            $table->dropColumn('id_service');
        });
    }
};
