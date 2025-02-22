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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('c_name') -> nullable();
            $table->string('c_slug') -> nullable() -> unique();
            $table->string('c_description', 300) -> nullable(); 
            $table->string('c_link') -> nullable();
            $table->string('c_domain') -> nullable();
            $table->string('c_avatar') -> nullable();
            $table->tinyInteger('c_hot') -> default(0);
            $table->tinyInteger('c_sort') -> default(0);
            $table->integer('c_parent_id') -> default(0);
            $table->integer('c_total_page') -> default(0);
            $table->integer('c_page_process') -> default(1);
            $table->tinyInteger('c_status') -> default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('categories');
    }
};
