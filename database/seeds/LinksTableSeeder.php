<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LinksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('links')->delete();

        DB::table('links')->insert([
            [
                'id' => 1,
                'user_id' => 1,
                'name' => 'Github',
                'url' => 'https://github.com/suxur',
                'icon' => 'fa-github',
                'created_at' => '2018-05-15 22:40:59',
                'updated_at' => '2018-05-15 22:40:59',
            ],
            [
                'id' => 2,
                'user_id' => 1,
                'name' => 'LinkedIn',
                'url' => 'https://www.linkedin.com/in/jlpayne85',
                'icon' => 'fa-linkedin',
                'created_at' => '2018-05-15 22:41:23',
                'updated_at' => '2018-05-15 22:41:23',
            ],
            [
                'id' => 3,
                'user_id' => 1,
                'name' => 'Twitter',
                'url' => 'https://twitter.com/JoshTheCodeDad',
                'icon' => 'fa-twitter',
                'created_at' => '2018-05-15 22:42:07',
                'updated_at' => '2018-05-15 22:42:07',
            ],
            [
                'id' => 4,
                'user_id' => 1,
                'name' => 'StackOverflow',
                'url' => 'https://stackoverflow.com/users/1748852/suxur?tab=profile',
                'icon' => 'fa-stack-overflow',
                'created_at' => '2018-05-15 22:47:30',
                'updated_at' => '2018-05-15 22:47:30',
            ]
        ]);
    }
}
