<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserLanguageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_language', function (Blueprint $table) {
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('language_id');

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('language_id')
                ->references('id')
                ->on('programming_languages')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->unique(['user_id', 'language_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_language');
    }
}
