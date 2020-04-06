<?php

namespace App\Providers;

use App\Contact;
use Illuminate\Support\ServiceProvider;
use App\Appointment;
use App\Notification;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //        $not =  new Notification();
        $not =  Notification::first();
        $app = Appointment::all();
        $msg = Contact::all();
        $x= 0;
        $y = 0;
        foreach ($app as $a)
        {
            if(!$a->readed)
            {
                $x++;
                $not->appointment = $x;
                $not->save();
            }
            elseif($a->readed){
                $not->appointment = $x;
            }
        }
        foreach ($msg as $t)
        {
            if(!$t->readed)
            {
                $y++;
                $not->message = $y;
                $not->save();
            }
            else{
                $not->message = $y;
                $not->save();
            }
        }
    }
}
