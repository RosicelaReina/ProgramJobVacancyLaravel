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
        Schema::create('postulates', function (Blueprint $table) {
            $table->id();
            $table->string('charge',300);
            $table->string('city',100);
            $table->string('company',100);
            $table->integer('salary');
            $table->string('typeContract',100);
            $table->text('title');
            $table->text('requeriments');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('postulates');
    }
};
