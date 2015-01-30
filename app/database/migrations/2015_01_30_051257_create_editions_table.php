<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEditionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('editions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 255);
			$table->string('slug', 255);
			$table->timestamps();
			$table->timestamp('published_at')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('editions', function(Blueprint $table)
		{
			//
		});
	}

}
