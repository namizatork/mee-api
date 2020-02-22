<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('best_programming_language_id')->nullable()->comment('一番好きな言語ID');
            $table->unsignedInteger('best_framework_id')->nullable()->nullable()->comment('一番好きなフレークワークID');
            $table->unsignedInteger('status_id')->nullable()->comment('ステータスID');
            $table->string('user_name')->comment('ユーザー名');
            $table->unsignedInteger('age')->nullable()->comment('年齢（1: 10代 2: 20代 3: 30代 4: 40代 5: 50代 6: 60代以上）');
            $table->unsignedInteger('prefecture')->nullable()->comment('都道府県（1: 北海道 ....）');
            $table->unsignedInteger('industry')->nullable()->comment('業種（1: フロントエンドエンジニア 2: バックエンドエンジニア 3 : インフラエンジニア 4: AIエンジニア 5: 組み込みエンジニア 6: その他）');
            $table->unsignedInteger('gender')->nullable()->comment('年齢');
            $table->unsignedInteger('experience_years')->nullable()->nullable()->comment('経験年数');
            $table->string('email')->nullable()->comment('メールアドレス');
            $table->string('password')->nullable()->comment('パスワード');
            $table->string('profile_image')->nullable()->comment('アイコン画像');
            $table->string('company')->nullable()->comment('企業名');
            $table->string('twitter_url')->nullable()->comment('TwitterURL');
            $table->string('facebook_url')->nullable()->comment('FacebookURL');
            $table->string('github_url')->nullable()->comment('GitHubURL');
            $table->string('qiita_url')->nullable()->comment('QiitaURL');
            $table->string('connpass_url')->nullable()->comment('connpassURL');
            $table->string('speakerdeck_url')->nullable()->comment('SpeakerDeckURL');
            $table->string('portfolio_url')->nullable()->comment('ポートフォリオURL');
            $table->string('misc_url')->nullable()->comment('その他URL');
            $table->boolean('first_flg')->default(true)->comment('紹介登録時の案内フラグ（false: 2回目）');
            $table->boolean('registered_flg')->default(false)->comment('登録されてるかどうか:（true:登録されてる）');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('best_programming_language_id')->references('id')->on('programming_languages');
            $table->foreign('best_framework_id')->references('id')->on('frameworks');
            $table->foreign('status_id')->references('id')->on('statuses');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
