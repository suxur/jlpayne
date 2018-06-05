<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->delete();

        DB::table('skills')->insert([
            [
                'id' => 1,
                'user_id' => 1,
                'parent_id' => null,
                'name' => 'Frameworks',
                'created_at' => '2018-05-15 23:01:54',
                'updated_at' => '2018-05-15 23:01:54',
            ],
            [
                'id' => 2,
                'user_id' => 1,
                'parent_id' => 1,
                'name' => 'Laravel',
                'created_at' => '2018-05-15 23:02:15',
                'updated_at' => '2018-05-15 23:02:15',
            ],
            [
                'id' => 3,
                'user_id' => 1,
                'parent_id' => 1,
                'name' => 'Symfony',
                'created_at' => '2018-05-15 23:02:15',
                'updated_at' => '2018-05-15 23:02:15',
            ],
            [
                'id' => 4,
                'user_id' => 1,
                'parent_id' => 1,
                'name' => 'CodeIgniter',
                'created_at' => '2018-05-15 23:02:15',
                'updated_at' => '2018-05-15 23:02:15',
            ],
            [
                'id' => 5,
                'user_id' => 1,
                'parent_id' => null,
                'name' => 'Languages',
                'created_at' => '2018-05-15 23:03:37',
                'updated_at' => '2018-05-15 23:03:37',
            ],
            [
                'id' => 6,
                'user_id' => 1,
                'parent_id' => 5,
                'name' => 'HTML & CSS',
                'created_at' => '2018-05-15 23:03:37',
                'updated_at' => '2018-05-15 23:03:37',
            ],
            [
                'id' => 7,
                'user_id' => 1,
                'parent_id' => 5,
                'name' => 'JavaScript',
                'created_at' => '2018-05-15 23:03:37',
                'updated_at' => '2018-05-15 23:03:37',
            ],
            [
                'id' => 8,
                'user_id' => 1,
                'parent_id' => 5,
                'name' => 'PHP',
                'created_at' => '2018-05-15 23:03:37',
                'updated_at' => '2018-05-15 23:03:37',
            ],
            [
                'id' => 9,
                'user_id' => 1,
                'parent_id' => null,
                'name' => 'Servers',
                'created_at' => '2018-05-19 16:43:44',
                'updated_at' => '2018-05-19 16:43:44',
            ],
            [
                'id' => 10,
                'user_id' => 1,
                'parent_id' => 1,
                'name' => 'Vue',
                'created_at' => '2018-05-19 16:43:57',
                'updated_at' => '2018-05-19 16:43:57',
            ],
            [
                'id' => 11,
                'user_id' => 1,
                'parent_id' => 1,
                'name' => 'React',
                'created_at' => '2018-05-19 16:43:57',
                'updated_at' => '2018-05-19 16:43:57',
            ],
            [
                'id' => 13,
                'user_id' => 1,
                'parent_id' => null,
                'name' => 'Environments',
                'created_at' => '2018-05-19 16:43:57',
                'updated_at' => '2018-05-19 16:43:57',
            ],
            [
                'id' => 14,
                'user_id' => 1,
                'parent_id' => 13,
                'name' => 'MacOS',
                'created_at' => '2018-05-19 16:43:57',
                'updated_at' => '2018-05-19 16:43:57',
            ],
            [
                'id' => 15,
                'user_id' => 1,
                'parent_id' => 13,
                'name' => 'Vagrant',
                'created_at' => '2018-05-19 16:43:57',
                'updated_at' => '2018-05-19 16:43:57',
            ],
            [
                'id' => 16,
                'user_id' => 1,
                'parent_id' => 13,
                'name' => 'Ubuntu',
                'created_at' => '2018-05-19 16:43:57',
                'updated_at' => '2018-05-19 16:43:57',
            ],
            [
                'id' => 17,
                'user_id' => 1,
                'parent_id' => null,
                'name' => 'Languages',
                'created_at' => '2018-05-19 16:43:57',
                'updated_at' => '2018-05-19 16:43:57',
            ],
            [
                'id' => 18,
                'user_id' => 1,
                'parent_id' => 17,
                'name' => 'PHP',
                'created_at' => '2018-05-19 16:43:57',
                'updated_at' => '2018-05-19 16:43:57',
            ],
            [
                'id' => 19,
                'user_id' => 1,
                'parent_id' => 17,
                'name' => 'HTML & CSS',
                'created_at' => '2018-05-19 16:43:57',
                'updated_at' => '2018-05-19 16:43:57',
            ],
            [
                'id' => 20,
                'user_id' => 1,
                'parent_id' => 17,
                'name' => 'Javascript',
                'created_at' => '2018-05-19 16:43:57',
                'updated_at' => '2018-05-19 16:43:57',
            ],
            [
                'id' => 21,
                'user_id' => 1,
                'parent_id' => null,
                'name' => 'Editors',
                'created_at' => '2018-05-19 16:43:57',
                'updated_at' => '2018-05-19 16:43:57',
            ],
            [
                'id' => 22,
                'user_id' => 1,
                'parent_id' => 21,
                'name' => 'PhpStorm',
                'created_at' => '2018-05-19 16:43:57',
                'updated_at' => '2018-05-19 16:43:57',
            ],
            [
                'id' => 23,
                'user_id' => 1,
                'parent_id' => 21,
                'name' => 'Sublime Text',
                'created_at' => '2018-05-19 16:43:57',
                'updated_at' => '2018-05-19 16:43:57',
            ],
            [
                'id' => 24,
                'user_id' => 1,
                'parent_id' => 21,
                'name' => 'Vim',
                'created_at' => '2018-05-19 16:43:57',
                'updated_at' => '2018-05-19 16:43:57',
            ],
            [
                'id' => 25,
                'user_id' => 1,
                'parent_id' => null,
                'name' => 'Tools',
                'created_at' => '2018-05-19 16:43:57',
                'updated_at' => '2018-05-19 16:43:57',
            ],
            [
                'id' => 26,
                'user_id' => 1,
                'parent_id' => 25,
                'name' => 'Git',
                'created_at' => '2018-05-19 16:43:57',
                'updated_at' => '2018-05-19 16:43:57',
            ],
            [
                'id' => 27,
                'user_id' => 1,
                'parent_id' => 25,
                'name' => 'NPM, Composer, Bower',
                'created_at' => '2018-05-19 16:43:57',
                'updated_at' => '2018-05-19 16:43:57',
            ],
            [
                'id' => 28,
                'user_id' => 1,
                'parent_id' => 25,
                'name' => 'Gulp, Grunt, Webpack',
                'created_at' => '2018-05-19 16:43:57',
                'updated_at' => '2018-05-19 16:43:57',
            ],
            [
                'id' => 29,
                'user_id' => 1,
                'parent_id' => 9,
                'name' => 'Apache',
                'created_at' => '2018-05-19 16:43:57',
                'updated_at' => '2018-05-19 16:43:57',
            ],
            [
                'id' => 30,
                'user_id' => 1,
                'parent_id' => 9,
                'name' => 'Nginx',
                'created_at' => '2018-05-19 16:43:57',
                'updated_at' => '2018-05-19 16:43:57',
            ],
            [
                'id' => 31,
                'user_id' => 1,
                'parent_id' => 9,
                'name' => 'MySQL',
                'created_at' => '2018-05-19 16:43:57',
                'updated_at' => '2018-05-19 16:43:57',
            ]
        ]);
    }
}
