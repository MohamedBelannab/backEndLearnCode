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
        Schema::create('langages', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->text('WhyLearn');
            $table->text('example');
            $table->text('Applications');
            $table->text('Guide');
            $table->text('frameworks');
            $table->string('titre');
            $table->string('img');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
