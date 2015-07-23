<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManagersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('managers', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name');
            $table->string('pwd');
            $table->integer('last_login_at');
            $table->unsignedInteger('last_login_ip')->nullable();
            $table->string('nickname')->nullable();
            $table->string('email');
            $table->tinyInteger('gid');
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
		Schema::drop('managers');
	}

}
