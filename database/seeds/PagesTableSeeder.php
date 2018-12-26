<?php

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pages = [
            ['title' => 'Privacy Policy', 'slug'=> 'privacy-policy', 'body'=>'[]', 'status'=>'draft'],
            ['title' => 'About Us', 'slug'=> 'about-us', 'body'=>'[]', 'status'=>'draft'],
            // ['title' => '', 'slug'=> '', 'body'=>'', 'status'=>'draft'],
        ];
        foreach($pages as $page){
            App\Page::create($page);
        }
    }
}
