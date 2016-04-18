<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Queue;
use Log;
use DB;
use App\Test;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        DB::listen(function($query) {

            //dd(explode('?',$query->sql));
            //Test::where('id',5572)->update(['content'=>$query]);
            //
        });
/*        Queue::after(function (JobProcessed $event){
            Log::alert($event->connectionName);
            // $event->connectionName
            // $event->job
            // $event->data
        });*/

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
