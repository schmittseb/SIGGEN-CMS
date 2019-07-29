<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Page;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::find(1);

        Page::truncate();


            $home = new Page([
                'title' => 'Homepage',
                'url' => '/homepage',
                'content' => 'This is the homepage'
            ]);
            $events = new Page([
                'title' => 'Events',
                'url' => '/events',
                'content' => 'This is the event page'
            ]);
            $resources = new Page([
                'title' => 'Resources',
                'url' => '/resources',
                'content' => 'This is resources page'
            ]);
            $board = new Page([
                'title' => 'Board',
                'url' => '/board',
                'content' => 'This is the board members page'
            ]);
            $publications = new Page([
                'title' => 'Publications',
                'url' => '/publications',
                'content' => 'This is the publication page'
            ]);
            $mailinglist = new Page([
                'title' => 'Mailing list',
                'url' => '/mailing-list',
                'content' => 'This is the mailing list page'
            ]);

            $admin->pages()->saveMany([
                $home, $events, $resources, $board, $publications, $mailinglist
            ]);

            //$about->appendNode($faq);
    }
}
