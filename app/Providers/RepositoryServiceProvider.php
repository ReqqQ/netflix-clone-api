<?php

namespace App\Providers;

use DomainModel\Netflix\IMovies;
use Illuminate\Support\ServiceProvider;
use Infrastructure\Netflix\MovieDbService;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register() {
        $this->app->bind(IMovies::class,MovieDbService::class);
    }
}
