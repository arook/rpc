<?php

use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rpc_auth_user', function($table) {
			$table->increments('id');
			$table->string('username', 50)->unique();
			$table->string('password', 60);
			$table->string('email', 45);
			$table->string('first_name', 45)->nullable();
			$table->string('last_name', 45)->nullable();
			$table->integer('role')->unsigned();
			$table->integer('company_id')->unsigned();

			$table->engine = 'InnoDB';
			$table->timestamps();
		});
  		
		// Company
		Schema::create('rpc_company', function($table) {
			$table->increments('id');
			$table->string('name', 100);
			$table->text('desc');
			$table->engine = 'InnoDB';
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
	  Schema::drop('rpc_auth_user');
		Schema::drop('rpc_company');
	}

}