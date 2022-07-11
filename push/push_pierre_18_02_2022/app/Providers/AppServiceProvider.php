<?php

namespace App\Providers;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

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
        Carbon::setLocale('fr');

        Blade::directive('dataDot20', function ($variable) {
            return "<?php Str::substr($variable, 0, 20)."."..."." ?>";
        });

        Blade::directive('convertMoney', function($money){
            return "<?php echo number_format($money, 2); ?>";
        });
    }
}
