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
        Schema::create('guaidenesses', function (Blueprint $table) {
            $table->id();
            $table->string('NameEng1');
            $table->string('NameArabic1');
            $table->string('NameUrdu1');
            $table->string('youtube_videos');
            $table->string('Description');
            $table->string('detaillesson_id');
            $table->string('read_id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guaidenesses');
    }
};
