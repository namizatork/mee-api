<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_languages', function (Blueprint $table) {
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('programming_language_id');
            $table->softDeletes(); //論理削除
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('programming_language_id')->references('id')->on('programming_languages');

            $table->unique(['user_id', 'programming_language_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_languages');
    }
}
