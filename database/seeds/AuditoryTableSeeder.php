<?php

use App\Subject;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class SubjectTableSeeder
 */
class AuditoryTableSeeder extends Seeder {

    /**
     *
     */
    public function run()
    {
        DB::table('auditories')->delete();

        DB::unprepared(file_get_contents(app_path('../database/seeds/sql/auditory.sql')));

        $this->command->info('Auditory seeds already loaded!');
    }

}