<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExperiencesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('experiences')->delete();

        DB::table('experiences')->insert([
            [
                'id' => 1,
                'title' => 'Web Developer',
                'company' => 'Oklahoma Tourism',
                'location' => 'Oklahoma City, OK',
                'url' => 'https://www.travelok.com',
                'from' => '2017-03-01',
                'to' => null,
                'current' => 1,
                'description' => null,
                'created_at' => '2018-05-12 21:59:35',
                'updated_at' => '2018-05-12 21:59:35',
            ],
            [
                'id' => 2,
                'title' => 'Lead Developer',
                'company' => 'agentimpress.me',
                'location' => 'Oklahoma City, OK',
                'url' => 'https://agentimpress.me',
                'from' => '2016-01-01',
                'to' => '2017-03-01',
                'current' => 0,
                'description' => 'Setup Continuous Integration to expedite deployments. Server side architect for version 2.0 of our application. Implemented coding standards and git workflows. Migrated application from Apache server to Nginx. Laid the foundation for test driven development. Research, test and resolve all bugs and issues. Lead a team of four developers. Server setup, maintenance and updates.',
                'created_at' => '2018-05-12 21:59:35',
                'updated_at' => '2018-05-12 21:59:35',
            ],
            [
                'id' => 3,
                'title' => 'Developer & Lead Developer',
                'company' => 'The Environmental Compliance Group',
                'location' => 'Edmond, OK',
                'url' => null,
                'from' => '2013-05-01',
                'to' => '2016-01-01',
                'current' => 0,
                'description' => 'Organized development tasks and projects. Supported employees with in-house application issues. Developed native PHP modules to for the back-end web application. Integrated Zoho, CallFire and Google Maps APIs into codebase. ',
                'created_at' => '2018-05-12 21:59:35',
                'updated_at' => '2018-05-12 21:59:35',
            ],
            [
                'id' => 4,
                'title' => 'Developer',
                'company' => 'VRAZER',
                'location' => 'Edmond, OK',
                'url' => 'https://vrazer.com/',
                'from' => '2014-03-01',
                'to' => '2014-08-01',
                'current' => 0,
                'description' => 'Developed custom PHP applications with Zend and Laravel frameworks. Created custom WordPress plugins to address client’s unique specifications. Transferred designs into WordPress Themes. Managed multiple projects and assist with client requests. ',
                'created_at' => '2018-05-12 21:59:35',
                'updated_at' => '2018-05-12 21:59:35',
            ]
        ]);
    }
}
