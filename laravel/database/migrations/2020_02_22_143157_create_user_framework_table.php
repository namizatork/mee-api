<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserFrameworkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_framework', function (Blueprint $table) {
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('framework_id');

            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('framework_id')
                ->references('id')
                ->on('frameworks')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->unique(['user_id', 'framework_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_framework');
    }
}
