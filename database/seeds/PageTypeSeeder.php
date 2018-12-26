<?php

use Illuminate\Database\Seeder;

class PageTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        
        $pages = [
            ['contact us','contact'],
            ['blog','blog'],
            ['resource','resource'],
            ['gallery','gallery'] ,
            ['custom',null]
        ];
        foreach($pages as $page){
            App\PageType::create(['name'=>$page[0],'template'=>$page[1]]);
        }
    }
}
