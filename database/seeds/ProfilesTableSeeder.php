<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfilesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('profiles')->delete();

        DB::table('profiles')->insert([
            [
                'id' => 1,
                'user_id' => 1,
                'title' => 'Web Developer',
                'bio' => 'Highly driven and passionate self-taught developer of six years who specializes in building web applications in PHP and JavaScript frameworks while always striving to learn and broaden an already extensive skill set. Excellent problem solver, stickler for writing clean code and always looking for efficient ways to refactor and implement new technologies.

>*As a father, husband, code junkie, gamer and minimalist, I believe your work shouldn\'t define your life but your life should define your work.*',
                'location' => 'Yukon, OK 73099',
                'number' => '405.494.0029',
                'created_at' => '2018-05-15 22:20:36',
                'updated_at' => '2018-05-15 22:20:36',
            ]
        ]);
    }
}
