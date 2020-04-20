<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgrammingLanguageFrameworksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programming_language_frameworks', function (Blueprint $table) {
            $table->unsignedInteger('language_id');
            $table->unsignedInteger('framework_id');

            $table->foreign('language_id')
                ->references('id')
                ->on('programming_languages')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('framework_id')
                ->references('id')
                ->on('frameworks')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->unique(['language_id', 'framework_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('programming_language_frameworks');
    }
}
