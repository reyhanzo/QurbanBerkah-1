<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCicilansTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cicilans', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->bigInteger("hewan_id");
			$table->bigInteger("user_id");
			$table->integer("durasi");
			$table->double("perbulan");
			$table->integer("tercicil");
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
		Schema::dropIfExists('cicilans');
	}
}
