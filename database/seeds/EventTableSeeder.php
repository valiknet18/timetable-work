<?php

use App\Subject;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class SubjectTableSeeder
 */
class EventTableSeeder extends Seeder {

    /**
     *
     */
    public function run()
    {
        DB::table('events')->delete();
        DB::table('everyday')->delete();
        DB::table('everymonth')->delete();
        DB::table('everyweek')->delete();

        DB::unprepared(file_get_contents(app_path('../database/seeds/sql/event.sql')));

        $this->command->info('Auditory seeds already loaded!');
    }

}