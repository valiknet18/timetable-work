<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

        DB::statement('alter table teacher_subject disable trigger all;');

        $this->call('TeacherTableSeeder');
        $this->call('SubjectTableSeeder');
		$this->call('GroupTableSeeder');
		$this->call('AuditoryTableSeeder');

        DB::statement('alter table teacher_subject enable trigger all;');

        $this->command->info('All seeds already loaded!');
	}

}
