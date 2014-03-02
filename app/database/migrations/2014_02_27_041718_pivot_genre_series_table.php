<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class PivotGenreSeriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('genres_series', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('genres_id')->unsigned()->index();
			$table->integer('series_id')->unsigned()->index();
			$table->foreign('genres_id')->references('id')->on('genres')->onDelete('cascade');
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
		Schema::drop('genres_series');
	}

}
