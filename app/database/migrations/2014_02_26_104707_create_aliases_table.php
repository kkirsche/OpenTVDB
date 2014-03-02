<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAliasesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('aliases', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('series_id');
			$table->string('name');
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
		Schema::drop('aliases');
	}

}
