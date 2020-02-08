<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionPlaylistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('session_playlists', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('session_id');
            $table->unsignedInteger('episode_id');
            $table->unsignedTinyInteger('order');
            $table->unsignedInteger('user_id');
            $table->timestamps();

            $table->foreign('session_id')
                ->references('id')
                ->on('sessions');
            $table->foreign('episode_id')
                ->references('id')
                ->on('episodes');
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('session_playlists');
    }
}
