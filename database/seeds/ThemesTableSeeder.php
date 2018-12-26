<?php

use Illuminate\Database\Seeder;

class ThemesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $themes = [
            ['name' => 'charity','active'=> false, 'id'=>1 ],
            ['name' => 'eStartup', 'active'=> true,'id'=>2 ],
        ];
        foreach($themes as $theme){
            App\Theme::create($theme);
        }
    }
}
