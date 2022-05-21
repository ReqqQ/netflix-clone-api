<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('movies', static function (Blueprint $table) {
            $table->id();
            $table->string('name')->index('movie_name_index');
            $table->tinyText('description');
            $table->integer('type');
            $table->integer('season');
            $table->integer('episode');
            $table->boolean('is_enabled');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
};
