<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EducationTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('education')->delete();

        DB::table('education')->insert([
            [
                'id'         => 1,
                'degree'     => 'Associate of Science, Recording Arts',
                'school'     => 'Full Sail University',
                'from'       => null,
                'to'         => '2007-01-01',
                'created_at' => '2018-05-15 22:00:45',
                'updated_at' => '2018-05-15 22:00:45',
            ],
            [
                'id'         => 2,
                'degree'     => 'Associate of Arts, General Studies',
                'school'     => 'Redlands Community College',
                'from'       => null,
                'to'         => '2012-01-01',
                'created_at' => '2018-05-15 22:00:45',
                'updated_at' => '2018-05-15 22:00:45',
            ]
        ]);
    }
}
