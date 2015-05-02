<?php

use App\Subject;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class SubjectTableSeeder
 */
class GroupTableSeeder extends Seeder {

    /**
     *
     */
    public function run()
    {
        DB::table('groups')->delete();

        DB::unprepared(file_get_contents(app_path('../database/seeds/sql/group.sql')));

        $this->command->info('Group seeds already loaded!');
    }

}