<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEpisodesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('episodes', function (Blueprint $table) {
			$table->increments('id');
			$table->unsignedInteger('show_id');
			$table->unsignedInteger('episode_no');
            $table->unsignedInteger('user_id');
			$table->timestamps();

			$table->foreign('show_id')
				->references('id')
				->on('shows');
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
		Schema::dropIfExists('episodes');
	}
}
