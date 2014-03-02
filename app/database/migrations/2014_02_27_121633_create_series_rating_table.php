<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSeriesRatingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('series_ratings', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('series_id');
			$table->float('rating');
			$table->integer('user_id');
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
		Schema::drop('series_ratings');
	}

}
