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
        Schema::create('privecies', function (Blueprint $table) {
            $table->id();
            $table->string('main_heading');
            $table->string('main_paragraph1');
            $table->string('main_paragraph2');
            $table->string('heading1');
            $table->string('paragraph1');
            $table->string('heading2');
            $table->string('paragraph2');
            $table->string('heading3');
            $table->string('heading4');
            $table->string('paragraph4');
            $table->string('heading5');
            $table->string('paragraph5');
            $table->string('heading6');
            $table->string('paragraph6');
            $table->string('heading7');
            $table->string('paragraph7');
            $table->string('heading8');
            $table->string('paragraph8');
            $table->string('heading9');
            $table->string('paragraph9');
            $table->string('heading10');
            $table->string('paragraph10');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('privecies');
    }
};
