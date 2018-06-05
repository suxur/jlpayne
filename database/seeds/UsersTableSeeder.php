<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'Joshua Payne',
                'email' => 'josh@jlpayne.com',
                'password' => '$2y$10$LSuoCTBs8ux5v6TQ0L6taedfmeJ2So0K9nWFX4amFoetjF8ArFwsO',
                'remember_token' => null,
                'created_at' => '2018-05-14 03:01:56',
                'updated_at' => '2018-05-14 03:01:56',
            ]
        ]);
    }
}
