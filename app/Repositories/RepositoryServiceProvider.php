<?php

namespace App\Repositories;

use Illuminate\Support\ServiceProvider;
use App\Repositories\SampleDatabaseInterface;
use App\Repositories\SampleDatabaseRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(
            SampleDatabaseInterface::class,
            SampleDatabaseRepositories::class
        );
    }
}

?>