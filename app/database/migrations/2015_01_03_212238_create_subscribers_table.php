<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubscribersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('subscribers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 255);
			$table->string('email', 255)->unique();
			$table->string('secret', 255);
			$table->timestamp('unsubscribed_at')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('subscribers', function(Blueprint $table)
		{
			$table->drop();
		});
	}

}
