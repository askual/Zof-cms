<?php

use Illuminate\Foundation\Inspiring;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');


Artisan::command('createsuperuser', function () {
    $email = $this->ask('email');
    $password = $this->ask('password');
    Modules\Accounts\Entities\User::create([
        'name' => 'admin', 
        'email' => $email, 
        'password'=> Hash::make($password),
        'isadmin' => 1
    ]);
    $this->info('superadmin Created');
});

Artisan::command('kdrop', function () {
    $list = $this->ask('list tables?');
    $todrop = explode(' ',$list);
    $migrations = DB::table('migrations')->get();
    foreach($todrop as $table){
        foreach($migrations as $migration){
            $m = substr($migration->migration,25);
            if ($m==$table."_table") {
                DB::table('migrations')->where('id', $migration->id)->delete();
                $this->info($migration->migration.' removed');
                break;
            }
        }
        Schema::dropIfExists($table);
        $this->info($table." dropped");
    }
})->describe('Dropping database and migration file');

Artisan::command('ktheme', function () {
    $migrations = DB::table('options')->get();
    $theme = DB::table('options')->where('name','theme_current')->get()[0]->value;
    // $in  =  'resources/views/themes/'.$theme.'/config/theme.json';
    $json_path = base_path('Themes/'.$theme.'/config/theme.json');
    $handle = file_get_contents($json_path, "r");
    $zjson = json_decode($handle);
    foreach ($zjson->options as $option) {
        $row_name = "themes_".$theme."_".$option->name;
        $exists = sizeof(DB::table('options')->where('name',$row_name)->get());
        if($exists==0){
            DB::table('options')->insert(
                ['name' => $row_name, 'value' => $option->value]
            );
            $this->info($row_name." inserted");
        }
    }
                
})->describe('seeding theme options');

// Artisan::command('seed:module {module} {file?}', function ($module, $file="all") {
//  if($file=="all"){
//      // $in  =  '\\Modules\\'.$module.'\\Database\\Seeders\\Seed.php';
//      $in  =  'Modules/'.$module.'/Database/Seeders/Seed.php';
// 		$myArray = include "$in";
// 		foreach ($myArray as $seedFile) {
// 			Artisan::call('db:seed', [
// 		        '--class' => '\\Modules\\'.$module.'\\Database\\Seeders\\'.$seedFile
// 		    ]);
// 		}
// 	}else{
// 	    Artisan::call('db:seed', [
// 	        '--class' => '\\Modules\\'.$module.'\\Database\\Seeders\\'.$file.'TableSeeder'
// 	    ]);
// 	}
//     $this->info("Seeded!!! ".$file);
// });