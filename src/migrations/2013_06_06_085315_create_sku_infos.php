<?php

use Illuminate\Database\Migrations\Migration;

class CreateSkuInfos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
 	public function up()
 	{
 		// SKU info
   	Schema::create('rpc_item', function($table) {
   		$table->increments('id');
   		$table->string('sku', 20);
   		$table->text('desc');
   		$table->integer('company_id')->unsigned();
   		$table->integer('consuming')->unsigned();
   		$table->integer('amount')->unsigned();
   		$table->boolean('train');
   		$table->engine = 'innoDB';
   		$table->timestamps();

   		$table->foreign('company_id')->references('id')->on('rpc_company');
   		$table->index(array('sku', 'company_id'));
   	});

 	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
 	public function down()
 	{
 		Schema::drop('rpc_item');
 	}

}