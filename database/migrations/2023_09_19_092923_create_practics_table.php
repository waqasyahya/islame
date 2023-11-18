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
        Schema::create('practics', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('result');
            $table->string('audio1_path')->nullable();
            $table->string('audio2_path')->nullable();
            $table->unsignedBigInteger('furtherdetail_id');

            $table->unsignedBigInteger('detaillesson_id');
            $table->Integer('read_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('practics');
    }
};
