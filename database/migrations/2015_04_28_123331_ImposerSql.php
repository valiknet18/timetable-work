<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ImposerSql extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        DB::unprepared(file_get_contents(app_path('../database/migrations/sql/main.sql')));
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        DB::unprepared(file_get_contents(app_path('../database/migrations/sql/main_down.sql')));
	}

}
