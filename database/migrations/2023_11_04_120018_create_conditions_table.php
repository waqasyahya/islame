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
        Schema::create('conditions', function (Blueprint $table) {
            $table->id();
            $table->string('main_heading');
            $table->string('main_paragraph1');
            $table->string('main_paragraph2');
            $table->string('heading1');
            $table->string('paragraph1');
            $table->string('heading2');
            $table->string('paragraph2');
            $table->string('heading3');
            $table->string('paragraph3');

            $table->string('heading4');
            $table->string('paragraph4_1');
            $table->string('paragraph4_2');
            $table->string('heading5');
            $table->string('paragraph5_1');
            $table->string('paragraph5_2');
            $table->string('paragraph5_3');
            $table->string('paragraph5_4');
            $table->string('heading6');
            $table->string('paragraph6');
            $table->string('heading7');
            $table->string('paragraph7_1');
            $table->string('paragraph7_2');
            $table->string('paragraph7_3');
            $table->string('paragraph7_4');
            $table->string('heading8');
            $table->string('paragraph8_1');
            $table->string('paragraph8_2');
            $table->string('heading9');
            $table->string('paragraph9');
          
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conditions');
    }
};
