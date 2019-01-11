<?php

use Illuminate\Database\Seeder;

class OptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $options = [
            ['name' => 'site_name', 'value'=> 'Alen Ethiopia'],
            ['name' => 'site_description', 'value'=> 'Alen Ethiopia is a non-governmental institution'],
            ['name' => 'posts_per_page', 'value'=> '10'],
            ['name' => 'theme_current', 'value'=> '2'],
            // ['name' => '', 'value'=> ''],
            // ['name' => '', 'value'=> ''],
            // ['name' => '', 'value'=> ''],
            // ['name' => '', 'value'=> ''],
            // ['name' => '', 'value'=> ''],
            // ['name' => '', 'value'=> ''],
            // ['name' => '', 'value'=> ''],
            // ['name' => '', 'value'=> ''],
            // ['name' => '', 'value'=> ''],
            // ['name' => '', 'value'=> ''],
            // ['name' => '', 'value'=> ''],
            // ['name' => '', 'value'=> ''],
            // ['name' => '', 'value'=> ''],
            // ['name' => '', 'value'=> ''],
            // ['name' => '', 'value'=> ''],
            // ['name' => '', 'value'=> ''],
            // ['name' => '', 'value'=> ''],
            // ['name' => '', 'value'=> ''],
            // ['name' => '', 'value'=> ''],
            // ['name' => '', 'value'=> ''],
            // ['name' => '', 'value'=> ''],
            // ['name' => '', 'value'=> ''],
            // ['name' => '', 'value'=> ''],
            // ['name' => '', 'value'=> ''],
            // ['name' => '', 'value'=> ''],
            // ['name' => '', 'value'=> ''],    
        ];
        foreach($options as $option){
            Modules\Zof\Entities\Option::create($option);
        }
        
    }
}
