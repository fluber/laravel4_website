<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePosts extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
        Schema::create('posts', function($table)
        {
            $table->increments('id');
            $table->string('slug');
            $table->timestamp('modified')->defualt(DB::raw('CURRENT_TIMESTAMP'));
            $table->decimal('priority', 2, 1)->default('1.0');
            $table->string('freq')->default('monthly');
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
		//
        Schema::dropIfExists('posts');
	}

}
