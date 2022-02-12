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
                'id'          => 1,
                'title'       => 'Senior Front-End Web Developer',
                'company'     => 'Public Strategies',
                'location'    => 'Oklahoma City, OK',
                'url'         => 'https://publicstrategies.com/',
                'from'        => '2021-08-01',
                'to'          => null,
                'current'     => 1,
                'description' => 'I build, test and implement custom code, developing enhancements that enable a positive end-user experience. Working as part of the Technology team, I develop applications using technologies of React, React Native, and Typescript.',
                'created_at'  => '2021-12-23 21:13:31',
                'updated_at'  => '2021-12-23 21:13:31',
            ],
            [
                'id'          => 2,
                'title'       => 'Web Developer',
                'company'     => 'Oklahoma Tourism',
                'location'    => 'Oklahoma City, OK',
                'url'         => 'https://www.travelok.com',
                'from'        => '2017-03-01',
                'to'          => '2021-08-01',
                'current'     => 0,
                'description' => 'On a day to day basis, I helped fix any bugs and weird issues that were discovered along with enhancing the overall functionality of the site. When time permits we were detangling the spaghetti code and making it into a suitable environment so we can implement tests and start refactoring to make a more maintainable system. With a small team of two developers, we maintained every bit of the web stack. Many of our projects involve adding new features to our sites, complete overhauls of website designs, and even developing iOS and Android applications. 
<ul>
	<li>Add new features and fix issues on <a href="https://www.travelok.com">TravelOK</a> which gets 1.5 million page views a month</li>
	<li>Developed iOS and Android application for <a href="https://apps.apple.com/us/app/id1512625834">Oklahoma State Parks.</a></li>
	<li>Help maintain servers, codebases, issue trackers, code repositories and continuous integration.</li>
	<li>Transferred legacy codebase into Symfony Framework.</li>
	<li>Migrated websites and web apps from old servers to AWS servers.</li>
	<li>Setup asset delivery via S3/CloudFront and dynamic url image cropping and manipulation.</li>
	<li>Brought design to code and developed custom admin for <a href="https://www.oklahomatoday.com/">Oklahoma Today</a></li>
	<li>Implemented redesign of <a href="https://discoveroklahomatv.com/">Discover Oklahoma</a></li>
</ul>
',
                'created_at'  => '2018-05-12 21:59:35',
                'updated_at'  => '2018-05-12 21:59:35',
            ],
            [
                'id'          => 3,
                'title'       => 'Lead Developer',
                'company'     => 'agentimpress.me',
                'location'    => 'Oklahoma City, OK',
                'url'         => 'https://agentimpress.me',
                'from'        => '2016-01-01',
                'to'          => '2017-03-01',
                'current'     => 0,
                'description' => 'I was the lead developer, server admin, database admin, you name it. It was a startup that had initially launched with a SaaS platform built in Laravel that gave real estate agents a website and the ability to easily add single page listings. I inherited the first iteration of the app and saw it to version 2.0.0 where we added better UX by implementing Vue.js and the ability to add custom pages and layout to their website. I solely implemented continuous integration for the application so we could easily deploy hotfixes and releases. It had third-party APIs integrated including Google Maps and Stripe.  The last major undertaking before my departure was integrating an MLS/RETS/IDX Feed connector. This allowed an agent to connect their account with their MLS feed which would pull in their listings and parse the data and images to import into our system.
<ul>
	<li>Setup Continuous Integration to expedite deployments.</li>
	<li>Server side architect for version 2.0 of our application.</li>
	<li>Implemented coding standards and git workflows.</li>
	<li>Migrated application from Apache server to Nginx.</li>
	<li>Laid the foundation for test driven development.</li>
	<li>Researched, tested and resolved all bugs and issues.</li>
	<li>Lead a team of four developers.</li>
	<li>Server setup, maintenance and updates.</li>
</ul>',
                'created_at'  => '2018-05-12 21:59:35',
                'updated_at'  => '2018-05-12 21:59:35',
            ],
            [
                'id'          => 4,
                'title'       => 'Developer & Lead Developer',
                'company'     => 'The Environmental Compliance Group',
                'location'    => 'Edmond, OK',
                'url'         => null,
                'from'        => '2013-05-01',
                'to'          => '2016-01-01',
                'current'     => 0,
                'description' => '<ul>
	<li>Organized development tasks and projects.</li>
	<li>Supported employees with in-house application issues.</li>
	<li>Developed native PHP modules to for the back-end web application.</li>
	<li>Integrated Zoho, CallFire and Google Maps APIs into codebase.</li>
</ul>',
                'created_at'  => '2018-05-12 21:59:35',
                'updated_at'  => '2018-05-12 21:59:35',
            ],
            [
                'id'          => 5,
                'title'       => 'Developer',
                'company'     => 'VRAZER',
                'location'    => 'Edmond, OK',
                'url'         => 'https://vrazer.com/',
                'from'        => '2014-03-01',
                'to'          => '2014-08-01',
                'current'     => 0,
                'description' => '<ul>
	<li>Developed custom PHP applications with Zend and Laravel frameworks.</li>
	<li>Created custom WordPress plugins to address client’s unique specifications.</li>
	<li>Transferred designs into WordPress Themes.</li>
	<li>Managed multiple projects and assist with client requests.</li>
</ul>',
                'created_at'  => '2018-05-12 21:59:35',
                'updated_at'  => '2018-05-12 21:59:35',
            ]
        ]);
    }
}
