<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class PivotActorEpisodeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('guests', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('actor_id')->unsigned()->index();
			$table->integer('episode_id')->unsigned()->index();
			$table->foreign('actor_id')->references('id')->on('actors')->onDelete('cascade');
			$table->foreign('episode_id')->references('id')->on('episodes')->onDelete('cascade');
		});
	}



	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('guests');
	}

}
