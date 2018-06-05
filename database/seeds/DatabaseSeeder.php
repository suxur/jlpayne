<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(EducationTableSeeder::class);
        $this->call(ExperiencesTableSeeder::class);
        $this->call(LinksTableSeeder::class);
        $this->call(ProfilesTableSeeder::class);
        $this->call(SkillsTableSeeder::class);
    }
}
