<?php

use App\Traits\BaseModelSoftDeleteDefault;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    use BaseModelSoftDeleteDefault;
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('profile', function (Blueprint $table) {
            $table->id();
            $table->text('story');
            $table->string('vision', 255);
            $table->string('mision', 255);
            $table->string('motto', 255);
            $table->string('struktur_organisasi', 255);
            $this->base($table);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profile');
    }
};
