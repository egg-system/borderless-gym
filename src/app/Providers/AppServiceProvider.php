<?php

namespace App\Providers;

use App\Models\Offer;
use App\Observers\OfferObserver;
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
        if (config('logging.enable_sql_log')) {
            $this->listenSqlLog();
        }
    }

    protected function listenSqlLog()
    {
        \DB::listen(function ($query) {
            \Log::debug('SQL', [
                'sql' => $query->sql,
                'bindings' => implode(',', $query->bindings),
                'time' => "$query->time ms",
            ]);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Offer::observe(OfferObserver::class);
    }
}
