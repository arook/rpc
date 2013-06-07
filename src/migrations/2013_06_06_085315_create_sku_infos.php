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
   	Schema::create('item', function($table) {
   		$table->increments('id');
   		$table->string('sku', 20);
   		$table->text('desc');
   		$table->integer('company_id')->unsigned();
   		$table->integer('consuming')->unsigned();
   		$table->integer('amount')->unsigned();
   		$table->boolean('train');
   		$table->engine = 'innoDB';
   		$table->timestamps();

   		$table->foreign('company_id')->references('id')->on('company');
   		$table->index(array('sku', 'company_id'));
   	});

   	DB::table('item')->insert(array(
   		'sku' => '111-11101-01',
   		'desc' => 'sample sku',
   		'company_id' => 1,
   		'consuming' => 5,
   		'amount' => 50,
   		'train' => true,
   	));
 	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
 	public function down()
 	{
 		Schema::drop('item');
 	}

}