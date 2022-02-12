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
                'id'         => 1,
                'user_id'    => 1,
                'title'      => 'Senior Front-End Web Developer',
                'bio'        => 'I’m a father, husband, developer, dungeon master, miniature painter, gamer, and minimalist. I’m a highly driven and passionate self-taught developer of eight years. I specialize in building web applications in PHP and JavaScript frameworks. I love to learn and broaden my already extensive skill set. I am an excellent problem solver, a stickler for writing clean code, and always looking for efficient ways to refactor and implement new technologies.',
                'location'   => 'Yukon, OK 73099',
                'number'     => '405.494.0029',
                'created_at' => '2018-05-15 22:20:36',
                'updated_at' => '2018-05-15 22:20:36',
            ]
        ]);
    }
}
