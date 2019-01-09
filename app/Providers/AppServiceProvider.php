<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
// use Nwidart\Modules\Module;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;
use App\Option;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       
        // Relation::morphMap([
        // ]);
        Schema::defaultStringLength(191);
        View::share('option_site_name', Option::where('name','site_name')->first()->value);
        View::share('option_site_description', Option::where('name','site_description')->first()->value);
        Blade::directive('theme', function ($expression) {
            // return $expression;
            $theme = DB::table('options')->where('name','theme_current')->get()[0]->value;
            $expression2 = substr($expression, 1,strlen($expression)-1);
            $row_name = "themes_".$theme."_".$expression2;
            $answer = DB::table('options')->where('name',substr($row_name,0,strlen($row_name)-1))->get()[0]->value;
            // return ; 
            return $answer;
            return "<?php echo '$answer' ?>";
        });
        // Blade::directive('p', function($expression) {
        //     $output = $expression ? $expression : "1";
        //     // list($expression1, $expression2) = explode(', ', $expression);
        //     // $output = $expression1 ? $expression1 : $expression2;
        //     return "<?php echo {$output}; ";
        // });
        // Nwidart\Modules->app['modules']->boot()
        // Module::boot();
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
