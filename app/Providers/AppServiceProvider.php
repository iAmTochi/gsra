<?php

namespace App\Providers;

use App\Models\User;
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
        $this->registerMacros();
    }

    public function registerMacros()
    {
        $this->registerCustomBladeDirectives();
    }

    public function registerCustomBladeDirectives()
    {
        Blade::if('admin', function (User $user = null) {
            return ($user ?? user())->isAdmin();
        });

        Blade::if('employer', function (User $user = null) {
            return ($user ?? user())->isEmployer();
        });

        Blade::if('applicant', function (User $user = null) {
            return ($user ?? user())->isApplicant();
        });

        Blade::directive('money', function ($expression) {
            return "<?php echo number_format($expression, 2) ?>";
        });
    }
}
