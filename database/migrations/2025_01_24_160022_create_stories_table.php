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
        Schema::create('stories', function (Blueprint $table) {
            $table->id();
            $table->string('s_name') -> nullable();
            $table->string('s_slug') -> nullable() -> unique();
            $table->string('s_description', 300) -> nullable();
            $table->string('s_avatar', 1000) -> nullable();
            $table->string('s_link') -> nullable();
            $table->integer('s_type_id')->default(0);
            $table->integer('s_auth_id')->default(0);
            $table->string('s_auth_name') -> nullable();
            $table->integer('s_admin_id') -> default(0);
            $table->integer('s_total_chapter') -> default(0);
            $table->tinyInteger('s_status') -> default(0);
            $table->text('s_content') -> nullable();
            $table->integer('s_view') -> default(0);
            $table->integer('s_favourite') -> default(0);
            $table->integer('vote_number') -> default(0);
            $table->integer('vote_total') -> default(0);
            $table->tinyInteger('s_hot') -> default(0);
            $table->integer('c_parent_id');
            $table->string('category_name') -> nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('stories');
    }
};
