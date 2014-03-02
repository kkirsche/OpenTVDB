<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class PivotActorSeriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('actors_series', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('actors_id')->unsigned()->index();
			$table->integer('series_id')->unsigned()->index();
			$table->foreign('actors_id')->references('id')->on('actors')->onDelete('cascade');
			$table->foreign('series_id')->references('id')->on('series')->onDelete('cascade');
		});
	}



	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('actors_series');
	}

}
