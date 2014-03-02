<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEpisodesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('episodes', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('series_id');
			$table->integer('season_id');
			$table->string('name');
			$table->integer('ep_number');
			$table->integer('aired');
			$table->integer('director_id');
			$table->integer('writer_id');
			$table->text('overview');
			$table->integer('dvd_season');
			$table->integer('dvd_episode');
			$table->integer('absolute');
			$table->integer('scene_season');
			$table->integer('scene_episode');
			$table->integer('created_at');
			$table->integer('updated_at');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('episodes');
	}

}
