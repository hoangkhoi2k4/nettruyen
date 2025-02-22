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
        Schema::create('types', function (Blueprint $table) {
            $table->id();
            $table->string('t_name') -> nullable();
            $table->string('t_slug') -> nullable() -> unique();
            $table->string('t_description', 300) -> nullable();
            $table->tinyInteger('t_hot') -> default(0);
            $table->tinyInteger('t_sort') -> default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('types');
    }
};
