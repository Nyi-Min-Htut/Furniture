<?php 

namespace App\Providers;


use Illuminate\Support\ServiceProvider;

use App\Repositories\Category\CategoryRepository;
use App\Repositories\Category\CategoryRepositoryInterface;

use App\Repositories\Admin\AdminRepository;
use App\Repositories\Admin\AdminRepositoryInterface;


class RepositoryServiceProvider extends ServiceProvider{
    public function register(){

        $this->app->bind(CategoryRepositoryInterface::class,CategoryRepository::class);
        $this->app->bind(AdminRepositoryInterface::class,AdminRepository::class);
    }
}