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
        Schema::create('project', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titre')->nullable();
            $table->string('prop')->nullable();
            $table->string('lieu')->nullable();
            $table->string('desc')->nullable();
            $table->string('datedeb')->nullable();
            $table->string('datefin')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project');
    }
};
