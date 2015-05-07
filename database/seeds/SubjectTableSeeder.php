<?php

use App\Subject;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class SubjectTableSeeder
 */
class SubjectTableSeeder extends Seeder {

    /**
     *
     */
    public function run()
    {
        DB::table('subjects')->delete();

        DB::unprepared(file_get_contents(app_path('../database/seeds/sql/subject.sql')));

        $this->command->info('Subject seeds already loaded!');
    }

}