<?php

use App\Teacher;
use Illuminate\Database\Seeder;

/**
 * Class TeacherTableSeeder
 */
class TeacherTableSeeder extends Seeder {

    /**
     *
     */
    public function run()
    {
        DB::table('teachers')->delete();

        DB::unprepared(file_get_contents(app_path('../database/seeds/sql/teacher.sql')));

        $this->command->info('Teachers seeds already loaded!');
    }

}